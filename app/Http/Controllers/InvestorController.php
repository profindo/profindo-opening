<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvestorRequest;
use App\Models;
use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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
                $investor->religion = $request->input('cust_religion') != '0' ? $request->input('cust_religion') : $request->input('cust_religion_other');
                $investor->education = $request->input('cust_education') != '0' ? $request->input('cust_education') : $request->input('cust_education_other');
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
                $investor->address_home_status = $request->input('cust_home_address_status') != '0' ? $request->input('cust_home_address_status') : $request->input('cust_home_address_status_other');
                break;
            case 2:
                $investor->mother_name = $request->input('cust_mother_name');
                $investor->inheritor_name = $request->input('cust_inheritor_name');
                $investor->inheritor_phone = $request->input('cust_inheritor_phone');
                $investor->inheritor_relationship = $request->input('cust_inheritor_relationship');
                if($request->input('cust_inheritor_address')) {
                    foreach($request->input('cust_inheritor_address') as $key => $val) {
                        $investor->update(['address_inheritor_'.$key => $val]);
                    }
                }
                $investor->partner_name = $request->input('cust_partner_name');
                $investor->partner_phone = $request->input('cust_partner_phone');
                $investor->partner_relationship = $request->input('cust_partner_relationship');
                if($request->input('cust_partner_address')) {
                    foreach($request->input('cust_partner_address') as $key => $val) {
                        $investor->update(['address_partner_'.$key => $val]);
                        info($investor['address_partner_'.$key]);
                    }
                }
                $investor->partner_profession = $request->input('cust_partner_profession') != '0' ? $request->input('cust_partner_profession') : $request->input('cust_partner_profession_other');
                $investor->partner_position = $request->input('cust_partner_position') != '0' ? $request->input('cust_partner_position') : $request->input('cust_partner_position_other');
                $investor->partner_company_name = $request->input('cust_partner_company_name');
                $investor->partner_company_address = $request->input('cust_partner_company_address');
                break;
            case 3:
                $investor->occupation_profession = $request->input('cust_occupation_profession') != '0' ? $request->input('cust_occupation_profession') : $request->input('cust_occupation_profession_other');
                $investor->occupation_position = $request->input('cust_occupation_position') != '0' ? $request->input('cust_occupation_position') : $request->input('cust_occupation_position_other');
                $investor->occupation_income_range = $request->input('cust_occupation_income_range');
                $investor->occupation_income_origin = $request->input('cust_occupation_income_origin') != '0' ? $request->input('cust_occupation_income_origin') : $request->input('cust_occupation_income_origin_other');
                $investor->company_name = $request->input('cust_occupation_name');
                $investor->company_industry = $request->input('cust_occupation_industry');
                $investor->company_phone = $request->input('cust_occupation_phone');
                $investor->company_fax = $request->input('cust_occupation_fax');

                if($request->input('cust_company_address')) {
                    foreach($request->input('cust_company_address') as $key => $val) {
                        $investor->update(['address_company_'.$key => $val]);
                    }
                }
                break;
            case 4:
                $investor->media_ktp = !$request->file('cust_media_ktp') ? $investor->media_ktp : $this->saveFile($request->file('cust_media_ktp'), 'ktp');
                $investor->media_npwp = !$request->file('cust_media_npwp') ?$investor->media_npwp : $this->saveFile($request->file('cust_media_npwp'), 'npwp');
                $investor->media_signature = !$request->file('cust_media_signature') ? $investor->media_signature : $this->saveFile($request->file('cust_media_signature'), 'ttd');
                $investor->media_selfie = !$request->file('cust_media_selfie') ? $investor->media_selfie : $this->saveFile($request->file('cust_media_selfie'), 'selfie');

                $investor->referral = $request->input('cust_referral');
                $investor->where_do_you_know = $request->input('cust_reference') != '0' ? $request->input('cust_reference') : $request->input('cust_reference_other');
                $investor->reason = $request->input('cust_reason') != '0' ? $request->input('cust_reason') : $request->input('cust_reason_other');
                $investor->is_occupation_related = $request->input('cust_acquintance');
                $investor->other_securities_company = $request->input('cust_other_text');
                break;
            case 5:
                $this->generateAccount($investor);
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
        $file_name = $investor->nik_no.'-'.$file_type.'.jpg';
        $file_string = file_get_contents($file);
        Storage::disk('uploads')->put(''.$investor->nik_no.'/'.$file_name, file_get_contents($file));

        return $investor->nik_no.'/'.$file_name;
    }

    public function generateAccount(Investor $investor)
    {
        $marital_status = [
            '1' => 'Single',
            '2' => 'Married',
            '3' => 'Duda',
            '4' => 'Janda',
        ];

        $relation = [
            '1' => 'Anak Kandung',
            '2' => 'Adik Kandung',
            '3' => 'Kakak Kandung',
            '4' => 'Ayah',
            '5' => 'Ibu',
            '6' => 'Istri',
            '7' => 'Suami',
            '8' => 'Keponakan',
            '9' => 'Orangtua Wali',
            '10'=> 'Saudara Lainnya',
            '11'=> 'Sepupu',
        ];

        $religion = [
            '1' => 'Islam',
            '2' => 'Kristen',
            '3' => 'Katolik',
            '4' => 'Hindu',
            '5' => 'Buddha',
        ];

        $education = [
            '1' => 'SD',
            '2' => 'SMP',
            '3' => 'SMA/SMK',
            '4' => 'Sarjana(S1)',
            '5' => 'Pasca Sarjana(S2)',
            '6' => 'Diploma',
        ];

        $occupation = [
            '1' => 'Ibu Rumah Tangga',
            '2' => 'Karyawan',
            '3' => 'Karyawan BUMN',
            '4' => 'Karyawan Swasta',
            '5' => 'Pegawai Negeri',
            '6' => 'Pelajar/Mahasiswa',
            '7' => 'Pensiun',
            '8' => 'TNI Polri',
            '9' => 'Wiraswasta',
        ];

        $income_range = [
            '1' => '<Rp. 10 Juta',
            '2' => 'Rp. 10 Juta s/d Rp. 50 Juta',
            '3' => 'Rp. 50 Juta s/d Rp. 100 Juta',
            '4' => 'Rp. 100 Juta s/d Rp. 500 Juta',
            '5' => 'Rp. 500 Juta s/d Rp. 1 Milyar',
            '6' => '>1 Milyar',
        ];

        $fund_source = [
            '1' => 'Gaji',
            '2' => 'Orang Tua / Anak',
            '3' => 'Bisnis',
            '4' => 'Suami / Istri',
        ];

        $bank_code = [
            'BBCA' => 'BCA',
            'CIMB' => 'CIMB Niaga',
            'BSIM' => 'Sinarmas',
        ];

        $objective = [
            '1' => 'Pendapatan',
            '2' => 'Investasi',
            '3' => 'Long Term Investment',
            '4' => 'Pertumbuhan Cepat',
            '5' => 'Price Appreciation',
            '6' => 'Spekulasi',
        ];

        $residential_status = [
            '1' => 'Rumah Keluarga',
            '2' => 'Milik Pribadi',
            '3' => 'Kontrak',
            '4' => 'Kos',
        ];

        $referrence = [
            '1' => 'Brosur/Spanduk/Banner',
            '2' => 'Cabang Profindo Sekuritas',
            '3' => 'Internet (Google Search, Iklan Bersponsor, Iklan Bergambar dan Iklan Video)',
            '4' => 'Komunitas',
            '5' => 'Nasabah Profindo Sekuritas',
            '6' => 'Pameran/Event',
            '7' => 'Sales/Marketing',
            '8' => 'Social Media',
            '9' => 'SPM',
            '10' => 'Teman/Keluarga',
            '11' => 'Website',
            '12' => 'Youtube',
        ];

        $cust_tmp = $investor->customer_temp_id ? Models\CustomerTemp::find($investor->customer_temp_id) : new Models\CustomerTemp();

        $cust_tmp->referenceNo = $investor->customer_temp_id ? $cust_tmp->referenceNo : DB::connection('milleniumlink')->table('CustomerTemp')->max('referenceNo') + 1;
        $cust_tmp->action = 'CREATION';

        $cust_tmp->investorFirstName = $investor->name;
        $cust_tmp->investorNationality = 'Indonesia';
        $cust_tmp->investorKTPNumber = $investor->nik_no;
        $cust_tmp->investorKTPExpiredDate = $investor->nik_expire;
        $cust_tmp->investorNPWPNumber = $investor->npwp;
        $cust_tmp->investorBirthPlace = $investor->birth_place;
        $cust_tmp->investorBirthDate = date('d-m-Y', strtotime($investor->birth_date));

        $cust_tmp->investorAddress1 = $investor->address_ktp_road;
        $cust_tmp->investorAddress2 = $investor->address_ktp_unit;
        $cust_tmp->investorAddress3 = ucwords(strtolower($investor->address_ktp_subdistrict));
        $cust_tmp->investorCity = ucwords(strtolower($investor->address_ktp_city));
        $cust_tmp->investorProvince = ucwords(strtolower($investor->address_ktp_province));
        $cust_tmp->investorPostalCode = $investor->address_ktp_postal;
        $cust_tmp->investorCountry = 'INDONESIA';
        $cust_tmp->investorMobilePhone = $investor->phone;
        $cust_tmp->investorEmail = Auth::user()->email;

        $cust_tmp->investorOtherAddress1 = $investor->address_home_road;
        $cust_tmp->investorOtherAddress2 = $investor->address_home_unit;
        $cust_tmp->investorOtherAddress3 = ucwords(strtolower($investor->address_home_subdistrict));
        $cust_tmp->investorOtherCity = ucwords(strtolower($investor->address_home_city));
        $cust_tmp->investorOtherProvince = ucwords(strtolower($investor->address_home_province));
        $cust_tmp->investorOtherPostalCode = $investor->address_home_postal;
        $cust_tmp->investorOtherMobilePhone = $investor->phone;

        $cust_tmp->investorSex = $investor->gender == 'M' ? 'Laki-laki' : 'Perempuan';
        $cust_tmp->investorMaritalStatus = is_numeric($investor->relationship_status) ? $marital_status[$investor->relationship_status] : 'Lainnya';
        $cust_tmp->investorHeirName = $investor->inheritor_name;
        $cust_tmp->investorHeirRelation = is_numeric($investor->inheritor_relationship) ? $relation[$investor->inheritor_relationship] : 'Lainnya';
        $cust_tmp->investorEducationalBackground = is_numeric($investor->education) ? $education[$investor->education] : 'Lainnya';
        $cust_tmp->investorOccupation = is_numeric($investor->occupation_profession) ? $occupation[$investor->occupation_profession] : 'Lainnya';
        $cust_tmp->investorIncomePerAnnum = $income_range[$investor->occupation_income_range];
        $cust_tmp->investorFundSource = is_numeric($investor->occupation_income_origin) ? $fund_source[$investor->occupation_income_origin] : 'Lainnya';
        $cust_tmp->investorBankAccountName1 = $bank_code[$investor->bank_code];
        $cust_tmp->investorNatureofBusiness = $investor->company_industry;
        $cust_tmp->investorBankAccountNumber1 = $investor->bank_no;
        $cust_tmp->investorBankAccountHolderName1 = $investor->bank_name;

        $cust_tmp->investorInvestmentObjective = $objective[$investor->reason];
        $cust_tmp->investorMothersMaidenName = $investor->mother_name;
        $cust_tmp->Religion = is_numeric($investor->religion) ? $religion[$investor->religion] : 'Lainnya';
        $cust_tmp->CompanyName = $investor->company_name;
        $cust_tmp->CompanyAddress = $investor->address_company_road;
        $cust_tmp->CompanyCity = $investor->address_company_city;
        $cust_tmp->CompanyTelp = $investor->company_phone;

        $cust_tmp->investorResidential = $residential_status[$investor->address_home_status];
        $cust_tmp->companyPostal = $investor->address_company_postal;
        $cust_tmp->KenalProfindo = $referrence[$investor->where_do_you_know];
        $cust_tmp->referensiProfindo = $investor->referral;

        $cust_tmp->investorHeirAddress = $investor->address_inheritor_road;
        $cust_tmp->pasanganName = $investor->partner_name;
        $cust_tmp->pasanganTelp = $investor->partner_phone;
        $cust_tmp->pasanganHubungan = $investor->partner_relationship;
        $cust_tmp->pasanganCompany = $investor->partner_company_name;
        $cust_tmp->pasanganPosition = $investor->partner_position;
        $cust_tmp->pasanganCompanyAddress = $investor->partner_company_address;
        $cust_tmp->pasanganAddress = $investor->partner_address_road;
        $cust_tmp->pasanganRtrw = $investor->partner_address_unit;
        $cust_tmp->pasanganKelurahan = ucwords(strtolower($investor->partner_address_subdistrict));
        $cust_tmp->pasanganKecamatan = ucwords(strtolower($investor->partner_address_district));
        $cust_tmp->pasanganCity = ucwords(strtolower($investor->partner_address_city));
        $cust_tmp->pasanganProfesi = $investor->partner_profession;

        $cust_tmp->hasBca = $investor->bank_code == 'BBCA' ? 1 : 0;
        $cust_tmp->bcaExistingAccount = $cust_tmp->hasBca ? $investor->bank_no : NULL;
        if(!$cust_tmp->sreKsei) {
            $cust_tmp->kseiTime = NULL;
            $cust_tmp->kseiResult = NULL;
            $cust_tmp->pdfTime = NULL;
        }
        info([$investor->npwp_no, $investor->email]);

        if($cust_tmp->save()) {
            $investor->customer_temp_id = $cust_tmp->id;
            $investor->save();
        }
    }
}
