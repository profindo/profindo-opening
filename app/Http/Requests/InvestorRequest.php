<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

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
        $rules = [];
        $investor = Auth::user()->investor;
        switch($this->input('step')) {
            case 0:
                $rules = [
                    "cust_name"                     => 'required',
                    "cust_phone"                    => 'required',
                    "cust_email"                    => 'required',
                    "cust_gender"                   => 'required',
                    "cust_religion"                 => 'required',
                    "cust_nationality"              => 'required',
                    "cust_relationship_status"      => 'required',
                    "cust_birthdate"                => 'required',
                    "cust_birthplace"               => 'required',
                    "cust_nik"                      => 'required',
                    "cust_nik_expire"               => 'required_without:cust_nik_no_expire',
                    "cust_npwp"                     => 'required_without:cust_no_npwp',
                ];
                break;
            case 1:
                $rules = [
                    "cust_ktp_address.*"              => 'required',
                    "cust_home_address_status"      => 'required',
                ];
                if(!$this->input('home_ktp_address_same')) $rules["cust_home_address"] = 'required';
                break;
            case 2:
                $rules = [
                    "cust_mother_name"              => 'required',
                    "cust_inheritor_name"           => 'required',
                    "cust_inheritor_relationship"   => 'required',
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
                ];
                break;
            case 4:
                $rules = [
                    "cust_acquintance"              => 'required',
                ];
                if(!$investor->media_ktp) $rules["cust_media_ktp"] = 'required';
                if(!$investor->media_npwp) $rules["cust_media_npwp"] = 'required';
                if(!$investor->media_signature) $rules["cust_media_signature"] = 'required';
                if(!$investor->media_selfie) $rules["cust_media_selfie"] = 'required';
                break;
            case 5:
                $rules = [];
                break;
        }
        return $rules;
    }

    public function attributes()
    {
        return [
            "cust_name" => "Nama",
            "cust_phone" => "No. Telp",
            "cust_email" => "E-mail",
            "cust_religion" => "Agama",
            'cust_npwp' => "NPWP",
            'cust_niik' => "NIK",
            "cust_birthdate" => "Tanggal Lahir",
            "cust_birthplace" => "Tempat Lahir",
            "cust_ktp_address" => "Alamat KTP",
            "cust_home_address" => "Alamat Rumah",
            "cust_mother_name" => "Nama Ibu",
            "cust_inheritor_name" => "Nama Pewaris",
            "cust_occupation_name" => "Nama Perusahaan",
            "cust_occupation_industry" => "Bidang Perusahaan",
            "cust_occupation_phone" => "No. Telp Perusahaan",
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
            'required_without'  => ':attribute harus diisi.',
            'min'               => ':attribute harus diisi penuh.',
        ];
    }
}
