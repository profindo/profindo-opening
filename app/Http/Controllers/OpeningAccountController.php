<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Models\Token;
use App\Models\Investor;
use App\Models\User;
use App\Http\Requests\InvestorRequest;
use Illuminate\Support\Facades\Validator;

class OpeningAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public static function index()
    {
        return view('opening.start', ['components', [view('opening.components.confirmation_modal'),]]);
    }

    public function validateUser(InvestorRequest $request)
    {
        if(User::where('email', $request->input('cust_email'))->exists())
        {
            if( Auth::attempt([
                'email' => $request->input('cust_email'),
                'password' => $request->input('cust_password')
                ], 1))
            {
                return response()->json([
                    'message' => 'Logged in succesfully.',
                ]);
            }
        }

        $validate = Validator::make($request->all(), [
            'cust_email' => 'unique:users,email',
        ], [
            'cust_email.unique' => 'Email sudah terpakai!'
        ]);
        $validate->after(function ($validate) use($request) {
            $handler = $this->getHandler($request->input('cust_bank_code'));
            $result = $handler->validateAccount($request);
            if($result != 'Success')
            {
                $validate->errors()->add('cust_bankno', $result);
            }
        });

        if($validate->fails())
        {
            return response()->json(['message'=>'The given data was invalid.', 'errors' => $validate->errors()], 422);
        }
        else{
            return response()->json(['status' => 'Success'], 201);
        }
    }

    public function getHandler($bank_type)
    {
        switch($bank_type) {
            case 'BBCA':
                return new Opening\BCAController();
                break;
            case 'CIMB':
                return new Opening\CIMBController();
                break;
            case 'BSIM':
                return new Opening\SinarmasController();
                break;
        }
    }

    public function sendVerificationEmail(Request $request)
    {
        $user = new Investor();

        $user->bank_name = $request->post('cust_bankname');
        $user->bank_no = $request->post('cust_bankno');
        $user->name = $request->post('cust_name');
        $user->phone = $request->post('cust_phone');
        $user->email = $request->post('cust_email');
        $user->password = Hash::make($request->post('cust_password'));

        $user->referral = $request->post('cust_referral');

        if($user->save()) { 
            session(['user_id'=> $user->id]);
            $token = strtoupper(Str::random(6));
            Token::create([
                'user_id' => $user->id,
                'token' => $token,
            ]);

            Mail::send('mail.verification', ['token' => $token, 'user' => $user], function ($message) use($user) {
                $message->to($user->email);
                $message->subject('Opening Account Verification');
            });
        }
        
        return false;
    }

    public function verifyEmail(Request $request)
    {
        $user = Investor::find(session('user_id'));
        if($user->is_email_verified) {
            $message = "You are already verified";
        }
        else if($request->input('otp_token') == $user->token->token) {
            Auth::login($user);
            $user->is_email_verified = 1;
            $user->save();
            $message = "Success";
        }
        return redirect()->route('opening.personal_info')->with('message', $message);
    }

    public function userForm()
    {
        return view('opening.form');
    }
}
