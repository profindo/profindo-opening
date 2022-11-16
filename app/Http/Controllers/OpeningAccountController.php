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
                $validate->errors()->add('cust_bank_no', $result);
            }
        });

        if($validate->fails())
        {
            return response()->json(['message'=>'The given data was invalid.', 'errors' => $validate->errors()], 422);
        }
        else{
            $this->sendVerificationEmail($request);
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
        $user = new User();
        $investor = new Investor();

        $user->name = $request->post('cust_name');
        $user->email = $request->post('cust_email');
        $user->password = Hash::make($request->post('cust_password'));

        $investor->name = $user->name;
        $investor->bank_name = $request->post('cust_bank_name');
        $investor->bank_no = $request->post('cust_bank_no');
        $investor->bank_code = $request->post('cust_bank_code');
        $investor->phone = $request->post('cust_phone');
        $investor->referral = $request->post('cust_referral');

        if($investor->save()) {
            $user->investor_id = $investor;
            $user->save();
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
        if($user->email_verified_at) {
            $message = "You are already verified";
        }
        else if($request->input('otp_token') == $user->token->token) {
            Auth::login($user);
            $user->is_email_verified = date('Y-m-d H:i:s');
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
