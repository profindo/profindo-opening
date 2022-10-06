<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpeningAccount extends Controller
{
    public function index(Request $req) {
        return view('opening.preparations');
    }

    public function userVerification(Request $req) {
        return;
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
