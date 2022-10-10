<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpeningAccountController extends Controller
{
    public static function index() {
        return view('opening.start', ['components', [view('opening.components.confirmation_modal'),]]);
    }

    public function userVerification(Request $req) {
        #if($req->input());
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
