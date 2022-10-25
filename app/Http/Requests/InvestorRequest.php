<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvestorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cust_bankname'     => 'required|max:35',
            'cust_bankno'       => 'required',
            'cust_name'         => 'required',
            'cust_email'        => 'required',
            'cust_phone'        => 'required',
            'cust_password'     =>  'required',
            'cust_passconfirm'  => 'same:cust_password',
        ];
    }

    public function attributes()
    {
        return [
            'cust_bankname'     => 'Nama Buku Tabungan',
            'cust_bankno'       => 'Nomor Rekening',
            'cust_name'         => 'Nama KTP',
            'cust_email'        => 'Email',
            'cust_phone'        => 'No Telepon',
            'cust_password'     => 'Password',
            'cust_passconfirm'  => 'Konfirmasi Password'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'required'          => ':attribute harus diisi.',
            'cust_bankname.max' => ':attribute harus dibawah 35 karakter.',
            'required_without'  => 'Salah satu harus diisi.',
            'same'              => ':attribute tidak sesuai.',
        ];
    }
}
