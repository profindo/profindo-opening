<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'cust_bank_name'     => 'required|max:35',
            'cust_bank_no'       => 'required',
            'cust_name'         => 'required',
            'cust_birth_date'    => 'required',
            'cust_email'        => 'required|email:rfc,dns',
            'cust_phone'        => 'required',
            'cust_password'     => 'required',
            'cust_passconfirm'  => 'same:cust_password',
        ];
    }

    public function attributes()
    {
        return [
            'cust_bank_name'     => 'Nama Buku Tabungan',
            'cust_bank_no'       => 'Nomor Rekening',
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
            'cust_bank_name.max' => ':attribute harus dibawah 35 karakter.',
            'required_without'  => 'Salah satu harus diisi.',
            'same'              => ':attribute tidak sesuai.',
        ];
    }
}
