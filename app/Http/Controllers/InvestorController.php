<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvestorRequest;
use App\Models;
use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $user = \App\Models\User::find(Auth::user()->id);
        $investor = $user->investor;
        switch($request->input('step')) {
            case 0:
                $investor->name = $request->input('cust_name');
                $investor->phone = $request->input('cust_phone');
                $investor->gender = $request->input('cust_gender');
                $user->email = $request->input('cust_email');
                $investor->religion = $request->input('cust_religion');
                $investor->nationality = $request->input('cust_nationality');
                $investor->birth_date = $request->input('cust_birthdate');
                $investor->birth_place = $request->input('cust_birthplace');
                $investor->nik_no = $request->input('cust_nik');
                if(!$request->input('cust_nik_no_expire')) {
                    $investor->nik_expire = $request->input('cust_nik_expire');
                }
                $investor->npwp = $request->input('cust_npwp');
                break;
            case 1:
                foreach($request->input('cust_ktp_address') as $key => $val) {
                    $investor->update(['address_ktp_'.$key => $val]);
                    if($request->input('home_ktp_address_same')) {
                        $investor->update(['address_home_'.$key => $val]);
                } else {
                        $investor->update(['address_home_'.$key => $request->input("cust_home_address")[$key]]);
                    }
                }
                $investor->address_home_status = $request->input('cust_address_home_status');
                break;
            case 2:
                $investor->mother_name = $request->input('cust_mother_name');
                $investor->inheritor_name = $request->input('cust_inheritor_name');
                $investor->inheritor_phone = $request->input('cust_inheritor_phone');
                $investor->inheritor_relationship = $request->input('cust_inheritor_relationship');
                if($request->input('cust_inheritor_address')) {
                    foreach($request->input('cust_inheritor_address') as $key => $val) {
                        $investor->update(['address_inheritor'.$key => $val]);
                    }
                }
                $investor->partner_name = $request->input('cust_partner_name');
                $investor->partner_phone = $request->input('cust_partner_phone');
                $investor->partner_relationship = $request->input('cust_partner_relationship');
                if($request->input('cust_partner_address')) {
                    foreach($request->input('cust_partner_address') as $key => $val) {
                        $investor->update(['address_partner'.$key => $val]);
                    }
                }
                $investor->partner_profession = $request->input('cust_partner_profession');
                $investor->partner_position = $request->input('cust_partnter_position');
                $investor->partner_company_name = $request->input('cust_partner_company_name');
                $investor->partner_company_address = $request->input('cust_partner_company_address');
                break;
            case 3:
                $investor->occupation_profession = $request->filled('cust_occupation_profession_other') ?
                    $request->input('cust_occupation_profession_other') : 
                    $request->input('cust_occupation_profession');
                $investor->occupation_position = $request->filled('cust_occupation_position_other') ?
                    $request->input('cust_occupation_position_other') : 
                    $request->input('cust_occupation_position');
                $investor->occupation_income_range = $request->input('cust_occupation_income_range');
                $investor->occupation_income_origin = $request->filled('cust_occupation_income_origin_other') ? 
                    $request->input('cust_occupation_income_origin_other') :
                    $request->input('cust_occupation_income_origin');
                $investor->company_name = $request->input('cust_occupation_name');
                $investor->company_industry = $request->input('cust_occupation_industry');
                $investor->company_phone = $request->input('cust_occupation_phone');
                $investor->company_fax = $request->input('cust_occupation_fax');

                if($request->input('cust_company_address')) {
                    foreach($request->input('cust_company_address') as $key => $val) {
                        $investor->update(['address_company'.$key => $val]);
                    }
                }
                break;
            case 4:
                $investor->media_ktp = !$request->file('cust_media_ktp') ? $investor->media_ktp : $this->saveFile($request->file('cust_media_ktp'), 'KTP');
                $investor->media_npwp = !$request->file('cust_media_npwp') ?$investor->media_npwp : $this->saveFile($request->file('cust_media_npwp'), 'NPWP');
                $investor->media_signature = !$request->file('cust_media_signature') ? $investor->media_signature : $this->saveFile($request->file('cust_media_signature'), 'SIGN');
                $investor->media_selfie = !$request->file('cust_media_selfie') ? $investor->media_selfie : $this->saveFile($request->file('cust_media_selfie'), 'SELFIE');

                $investor->referral = $request->input('cust_referral');
                $investor->where_do_you_know = $request->input('cust_reference');
                $investor->reason = $request->input('cust_reason');
                $investor->is_occupation_related = $request->input('cust_acquintance');
                $investor->other_securities_company = $request->input('cust_other_text');
                break;
            case 5:
                $this->generateRDN($investor->bank_code);
                break;
        }
        if((int) $request->input('step') + 1 >= $user->form_step) {
            //Indicates that the user is on the NEXT step
            $user->form_step = (int) $request->input('step') + 2;
        }

        $user->save();
        if($investor->save()) {
            return response()->json(['message' => 'Success', 'data' => ['step' => $user->form_step],'status' => '200'], 200);
        } else {
            return response()->json(['message' => 'Error!','status' => '500', 500]);
        }
    }

    public function delete() {
        return false;
    }

    public function saveFile($file, $file_type)
    {
        $investor = \App\Models\User::find(Auth::user()->id)->investor;
        $file_name = $investor->nik_no.'_'.$file_type.'.'.$file->extension();
        Storage::disk('uploads')->put(''.$investor->nik_no.'/'.$file_name, file_get_contents($file));

        return $investor->nik_no.'/'.$file_name;
    }

    public function generateRDN(Investor $investor)
    {
    }
}
