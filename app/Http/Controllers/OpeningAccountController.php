<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OpeningAccountController extends Controller
{
    public static function index()
    {
        return view('opening.start', ['components', [view('opening.components.confirmation_modal'),]]);
    }

    public function validateUser(Request $request)
    {
        $validation = Validator::make($request->post(), [
            'custBankName'      => 'required|max:35',
            'custBankNo'        => 'required',
            'custName'          => 'required',
            'custEmail'         => 'required_unless:custPhone,null',
            'custPhone'         => 'required_unless:custEmail,null',
            'custPassword'      =>  'required',
            'custPasswordConfirm' => 'same:custPassword',
        ], [
            'required'          => 'Kolom :attribute harus terisi.',
            'custBankName.max'  => 'Nama rekening harus dibawah 35 karakter.',
            'required_unless'   => 'Salah satu harus diisi.',
            'same'              => 'Tidak sesuai',
        ]);

        return $validation;
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
