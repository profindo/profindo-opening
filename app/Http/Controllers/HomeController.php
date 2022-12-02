<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        if(Auth::user()) {
            return redirect()->route('form.default');
        }
        return view('opening.start');
    }
}
