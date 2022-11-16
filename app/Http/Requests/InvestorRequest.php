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
        switch($this->input('step')) {
            case 0:
                $rules = [
                    "cust_name"                 => 'required',
                    "cust_phone"                => 'required',
                    "cust_email"                => 'required',
                    "cust_gender"               => 'required',
                    "cust_nationality"              => 'required',
                    "cust_relationship_status"  => 'required',
                    "cust_birthdate"            => 'required',
                    "cust_birthplace"           => 'required',
                    "cust_nik"                  => 'required',
                    "cust_nik_expire"           => 'required',
                    "cust_npwp"                 => 'required',
                ];
                break;
            case 1:
                $rules = [
                    "cust_address_ktp_jalan"    => 'required',
                    "cust_address_ktp_rtrw"     => 'required',
                    "cust_address_ktp_provinsi" => 'required',
                    "cust_address_ktp_kota"     => 'required',
                    "cust_address_ktp_kecamatan"=> 'required',
                    "cust_address_ktp_kelurahan"=> 'required',
                    "cust_address_ktp_kodepos"  => 'required',
                    "cust_address_home_status"  => 'required',
                ];
                break;
            case 2:
                $rules = [
                    "cust_mother_name"           => 'required',
                    "cust_inheritor_name"        => 'required',
                    "cust_inheritor_telp"        => 'required',
                    "cust_inheritor_relationship"=> 'required',
                ];
                break;
            case 3:
                $rules = [
                    "cust_occupation_profession"    => 'required',
                    "cust_occupation_position"      => 'required',
                    "cust_occupation_income_range"  => 'required',
                    "cust_occupation_income_origin" => 'required',
                    "cust_occupation_name"          => 'required',
                    "cust_occupation_industry"      => 'required',
                    "cust_occupation_phone"         => 'required',
                    "cust_occupation_fax"           => 'required',
                ];
                break;
            case 4:
                $rules = [
                    "cust_media_ktp"                => 'required',
                    "cust_media_npwp"               => 'required',
                    "cust_media_signature"          => 'required',
                    "cust_media_selfie"             => 'required',
                    "cust_acquintance"              => 'required',
                    "cust_other"                    => 'required',
                ];
                break;
            case 5:
                $rules = [
                    "cust_bank_name"     => 'required',
                    "cust_bank_no"       => 'required',
                    "bank_code"     => 'required',
                ];
                break;
        }
        return $rules;
    }

    public function attributes()
    {
        return [
            
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
        ];
    }
}
