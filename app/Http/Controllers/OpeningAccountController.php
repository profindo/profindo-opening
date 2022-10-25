<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvestorRequest;
use App\Models\Investor;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class OpeningAccountController extends Controller
{
    protected $form = 'opening.form';

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
        return response()->json('', 200);
    }

    public function sendVerificationEmail(Request $request)
    {
        $user = new Investor();

        $user->bank_name = $request->post('cust_bankname');
        $user->bank_no = $request->post('cust_bankno');
        $user->name = $request->post('cust_name');
        $user->phone = $request->post('cust_phone');
        $user->email = $request->post('cust_email');
        $user->password = $request->post('cust_password');

        $user->referral = $request->post('cust_referral');

        if($user->save()) { //To Do : IsValid
            event(new Registered($user));
            return true;
        }
        return false;
    }

    public function verifyEmail(Request $request)
    {
        return view($this->form);
    }

    public function userForm()
    {
        return view('opening.form');
    }
}
