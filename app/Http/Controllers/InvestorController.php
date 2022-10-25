<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function sendVerificationEmail(Request $request)
    {
        $user = new Investor;

        $user->email = $request->input('cust_password');
        $user->password = $request->input('cust_password');
    }
}
