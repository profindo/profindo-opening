<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvestorRequest;
use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestorController extends Controller
{
    public function index() {
        return true;
    }

    public function view() {
        return true;
    }

    public function create() {
        return true;
    }

    public function store() {
        return true;
    }

    public function edit() {
        return true;
    }

    public function update(InvestorRequest $request) {
        $investor = Auth::user()->investor;
        info($request->input());
        switch($request->input('step')) {
            case 0:
                $investor->name = $request->input('cust_name');
                $investor->phone = $request->input('cust_phone');
                $investor->gender = $request->input('cust_gender');
                $investor->nationality = $request->input('cust_nationality');
                switch($request->input('cust_relationship_status')) {
                    case 1:
                        $investor->relationship_status = 1;//"Single";
                        break;
                    case 2:
                        $investor->relationship_status = 2;//"Married";
                        break;
                    case 3:
                        $investor->relationship_status = 3;//"Divorced";
                        break;
                    case 4:
                        $investor->relationship_status = 4;//"Widowed";
                        break;
                }
                $investor->birth_date = $request->input('cust_birthdate');
                $investor->birth_place = $request->input('cust_birthplace');
                $investor->nik_no = $request->input('cust_nik');
                if($request->input('cust_nik_no_expire')) {
                    $investor->nik_expire = null;
                }
                else {
                    $investor->nik_expire = $request->input('cust_nik_expire');
                }
                $investor->npwp = $request->input('cust_npwp');
                break;
            case 1:
                $investor->address_ktp_road = $request->input('cust_address_ktp_road');
                $investor->address_ktp_rtrw = $request->input('cust_address_ktp_rtrw');
                $investor->address_ktp_provinsi = $request->input('cust_address_ktp_provinsi');
                $investor->address_ktp_kota = $request->input('cust_address_ktp_kota');
                $investor->address_ktp_kecamatan = $request->input('cust_address_ktp_kecamatan');
                $investor->address_ktp_kelurahan = $request->input('cust_address_ktp_kelurahan');
                $investor->address_ktp_kodepos = $request->input('cust_address_ktp_kodepos');
                if($request->input('home_ktp_address_same')) {
                    //Validate
                    $investor->address_home_road = $request->input('cust_address_home_road');
                    $investor->address_home_rtrw = $request->input('cust_address_home_rtrw');
                    $investor->address_home_provinsi = $request->input('cust_address_home_provinsi');
                    $investor->address_home_kota = $request->input('cust_address_home_kota');
                    $investor->address_home_kecamatan = $request->input('cust_address_home_kecamatan');
                    $investor->address_home_kelurahan = $request->input('cust_address_home_kelurahan');
                    $investor->address_home_kodepos = $request->input('cust_address_home_kodepos');
                }
                $investor->address_home_status = $request->input('cust_address_home_status');
                break;
            case 2:
                $investor->mother_name = $request->input('cust_mother_name');
                $investor->inheritor_name = $request->input('cust_inheritor_name');
                $investor->inheritor_phone = $request->input('cust_inheritor_phone');
                switch($request->input('cust_inheritor_relationship')) {
                    case 1:
                        $investor->inheritor_relationship = "Keluarga";
                        break;
                    case 2:
                        $investor->inheritor_relationship = "Pasangan";
                        break;
                    case 3:
                        $investor->inheritor_relationship = "Sepupu";
                        break;
                }
                break;
            case 3:
                switch($request->input('cust_occupation_profession')) {
                    case 1:
                        $investor->occupation_profession = "Private Employee (Karyawan Swasta)";
                        break;
                    case 2:
                        $investor->occupation_profession = "Entrepreneur (Pengusaha)";
                        break;
                    case 3:
                        $investor->occupation_profession = "Civil Servant (Pegawai Negri)";
                        break;
                    case 4:
                        $investor->occupation_profession = "TNI/Police (TNI/Polisi)";
                        break;
                    case 5:
                        $investor->occupation_profession = "Student (Pelajar)";
                        break;
                    case 6:
                        $investor->occupation_profession = "Housewife (Ibu Rumah Tangga)";
                        break;
                    case 7:
                        $investor->occupation_profession = "Teacher (Guru)";
                        break;
                    case 7:
                        $investor->occupation_profession = "Retirement (Pensiunan)";
                        break;
                    case 9:
                        $investor->occupation_profession = $request->input("cust_occupation_profession_other");
                        break;
                }
                $investor->occupation_position = $request->input('cust_occupation_position');
                $investor->occupation_income_range = $request->input('cust_occupation_income_range');
                $investor->occupation_income_origin = $request->input('cust_occupation_income_origin');
                if($request->input('cust_occupation_income_origin') == '8') $investor->occupation_income_origin = $request->input('cust_occupation_income_origin_other');
                $investor->company_name = $request->input('cust_occupation_name');
                $investor->company_industry = $request->input('cust_occupation_industry');
                $investor->company_phone = $request->input('cust_occupation_phone');
                $investor->company_fax = $request->input('cust_occupation_fax');
                break;
            case 4:
                $investor->media_ktp = $request->input('cust_media_ktp');
                $investor->media_npwp = $request->input('cust_media_npwp');
                $investor->media_signature = $request->input('cust_media_signature');
                $investor->media_selfie = $request->input('cust_media_selfie');
                $investor->referral = $request->input('cust_referral');
                $investor->where_do_you_know = $request->input('cust_reference');
                $investor->reason = $request->input('cust_reason');
                $investor->is_occupation_related = $request->input('cust_acquintance');
                $investor->other_securities_company = $request->input('cust_other');
                break;
            case 5:
                break;
        }
        $investor->save();
    }

    public function delete() {
        return false;
    }
}
