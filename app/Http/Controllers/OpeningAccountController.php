<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Models;
use App\Models\Investor;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Validator;

class OpeningAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public static function index()
    {
        return view('opening.start', ['components', [view('opening.components.confirmation_modal'),]]);
    }

    public function validateUser(UserRequest $request)
    {
        $user = Models\User::where('email', $request->input('cust_email'))->first();
        if($user)
        {
            if(!isset($user->email_verified_at)) {
                $this->sendVerificationEmail($user);
                return response()->json(['status' => 'Not Verified'], 201);
            }
            else if(Auth::attempt([
                'email' => $request->input('cust_email'),
                'password' => $request->input('cust_password')
                ], 1))
            {
                return response()->json([
                    'message' => 'Logged in succesfully.',
                ]);
            }
        }

        $validate = Validator::make($request->all(), [
            'cust_email' => 'unique:users,email',
        ], [
            'cust_email.unique' => 'Email sudah terpakai!'
        ]);
        $validate->after(function ($validate) use($request) {
            $handler = $this->getHandler($request->input('cust_bank_code'));
            $result = $handler->validateAccount($request);
            if($result != 'Success')
            {
                $validate->errors()->add('cust_bank_no', $result);
            }
        });

        if($validate->fails())
        {
            return response()->json(['message'=>'The given data was invalid.', 'errors' => $validate->errors()], 422);
        }
        else{
            $user = new Models\User();

            $user->name = $request->post('cust_name');
            $user->email = $request->post('cust_email');
            $user->password = Hash::make($request->post('cust_password'));
            $user->bank_name = $request->post('cust_bank_name');
            $user->birth_date = $request->post('cust_birth_date');
            $user->bank_no = $request->post('cust_bank_no');
            $user->bank_code = $request->post('cust_bank_code');
            $user->phone = $request->post('cust_phone');
            $user->referral = $request->post('cust_referral');

            if($user->save()) {
                session(['user_id'=> $user->id]);
                $this->sendVerificationEmail($user);
                return response()->json(['status' => 'Success'], 201);
            }
            return response()->json(['message'=>'Failed'], 500);
        }
    }

    public function getHandler($bank_type)
    {
        switch($bank_type) {
            case 'BBCA':
                return new Opening\BCAController();
                break;
            case 'CIMB':
                return new Opening\CIMBController();
                break;
            case 'BSIM':
                return new Opening\SinarmasController();
                break;
        }
    }

    public function sendVerificationEmail($user)
    {
        
        $token = strtoupper(Str::random(6));
        Models\Token::create([
            'user_id' => $user->id,
            'token' => $token,
        ]);

        Mail::send('mail.verification', ['token' => $token, 'user' => $user], function ($message) use($user) {
            $message->to($user->email);
            $message->subject('Opening Account Verification');
        });
    }

    public function verifyEmail(Request $request)
    {
        $user = Models\User::find(session('user_id'));
        if($request->input('otp_token') != $user->token->token) {
            return response()->json(["status" => 'failed', "message" => 'Wrong OTP'], 422);
        }
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user_cif = new Investor(); 
            $user_cif->name = $user->name;
            $user_cif->phone = $user->phone;
            $user_cif->bank_name = $user->bank_name;
            $user_cif->bank_no = $user->bank_no;
            $user_cif->bank_code = $user->bank_code;
            $user_cif->birth_date = $user->birth_date;
            if($user_cif->save()) {
                $user->investor_id = $user_cif->id; 
                $user->save();
            }

            Auth::login($user);

            return response()->json(["status" => 'success', "message" => "Success"], 200);
    }

    public function saveInvestor(Investor $investor)
    {
        $marital_status = [
            '1' => 'Single',
            '2' => 'Married',
            '3' => 'Duda',
            '4' => 'Janda',
        ];

        $religion = [
            '1' => 'Islam',
            '2' => 'Kristen',
            '3' => 'Katolik',
            '4' => 'Hindu',
            '5' => 'Buddha',
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
            $investor->occupation_profession => $investor->occupation_profession,
        ];

        $income_range = [
            '1' => '<Rp. 10 Juta',
            '2' => 'Rp. 10 Juta s/d Rp. 50 Juta',
            '3' => 'Rp. 50 Juta s/d Rp. 100 Juta',
            '4' => 'Rp. 100 Juta s/d Rp. 500 Juta',
            '5' => 'Rp. 500 Juta s/d Rp. 1 Milyar',
            '6' => '>1 Milyar',
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
            $investor->reason => $investor->reason,
        ];

        $residential_status = [
            '1' => 'Rumah Keluarga',
            '2' => 'Milik Pribadi',
            '3' => 'Kontrak',
            '4' => 'Kos',
            $investor->address_home_status => $investor->address_home_status,
        ];

        $marketing = [
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
            $investor->where_do_you_know = $investor->where_do_you_know,
        ];

        $cust_tmp = new Models\CustomerTemp();
        $cust_cif = new Models\CustomerCIF();

        $cust_tmp->action = 'CREATION';
        $cust_tmp->investorFirstName = $investor->name;
        $cust_tmp->investorNationality = 'Indonesia';
        $cust_tmp->investorKTPNumber = $investor->nik_no;
        $cust_tmp->investorKTPExpiredDate = $investor->nik_expire;
        $cust_tmp->investorNPWPNumber = $investor->npwp_no;
        $cust_tmp->investorBirthPlace = $investor->birth_place;
        $cust_tmp->investorBirthDate = $investor->birth_date;

        $cust_tmp->investorAddress1 = $investor->address_ktp_road;
        $cust_tmp->investorAddress2 = $investor->address_ktp_unit;
        $cust_tmp->investorAddress3 = $investor->address_ktp_subdistrict;
        $cust_tmp->investorCity = $investor->address_ktp_city;
        $cust_tmp->investorProvince = $investor->address_ktp_province;
        $cust_tmp->investorPostalCode = $investor->address_ktp_postal;
        $cust_tmp->investorCountry = 'INDONESIA';
        $cust_tmp->investorMobilePhone = $investor->phone;
        $cust_tmp->investorEmail = $investor->email;

        $cust_tmp->investorOtherAddress1 = $investor->address_home_road;
        $cust_tmp->investorOtherAddress2 = $investor->address_home_unit;
        $cust_tmp->investorOtherAddress3 = $investor->address_home_subdistrict;
        $cust_tmp->investorOtherCity = $investor->address_home_city;
        $cust_tmp->investorOtherProvince = $investor->address_home_province;
        $cust_tmp->investorOtherPostalCode = $investor->address_home_postal;
        $cust_tmp->investorOtherMobilePhone = $investor->phone;

        $cust_tmp->investorSex = $investor->gender == 'M' ? 'Laki-laki' : 'Perempuan';
        $cust_tmp->investorMaritalStatus = $marital_status[$investor->relationship_status];
        $cust_tmp->investorHeirName = $investor->inheritor_name;
        $cust_tmp->investorHeirRelation = $investor->inheritor_relationship;
        $cust_tmp->investorEducationalBackground = '';
        $cust_tmp->investorOccupation = $occupation[$investor->occupation_profession];
        $cust_tmp->investorNatureofBusiness = $investor->company_industry;
        $cust_tmp->investorIncomePerAnnum = $income_range[$investor->occupation_income_range];
        $cust_tmp->investorFundSource = '';
        $cust_tmp->investorBankAccountName1 = $bank_code[$investor->bank_code];
        $cust_tmp->investorBankAccountNumber1 = $investor->bank_no;
        $cust_tmp->investorBankAccountHolderName1 = $investor->bank_name;

        $cust_tmp->investorInvestmentObjective = $objective[$investor->reason];
        $cust_tmp->investorMothersMaidenName = $investor->mother_name;
        $cust_tmp->Religion = $religion[$investor->religion];
        $cust_tmp->CompanyName = $investor->company_name;
        $cust_tmp->CompanyAddress = $investor->address_company_road;
        $cust_tmp->CompanyCity = $investor->address_company_city;
        $cust_tmp->CompanyTelp = $investor->company_phone;

        $cust_tmp->investorResidential = $residential_status[$investor->address_home_status];
        $cust_tmp->companyPostal = $investor->address_company_postal;
        $cust_tmp->KenalProfindo = $marketing[$investor->where_do_you_know];
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
        $cust_tmp->pasanganKelurahan = $investor->partner_address_subdistrict;
        $cust_tmp->pasanganKecamatan = $investor->partner_address_district;
        $cust_tmp->pasanganCity = $investor->partner_address_city;
        $cust_tmp->pasanganProfesi = $investor->partner_profession;

        $cust_tmp->hasBca = $investor->bank_code == 'BBCA' ? 1 : 0;

        $cust_cif->CustomerId = '';
        $cust_cif->IdType = '';
        $cust_cif->IdNo = '';
        $cust_cif->NationalityNo = '';
        $cust_cif->Occupation = '';
        $cust_cif->CompanyName = '';
        $cust_cif->Email = '';
        $cust_cif->PhoneNo1 = '';
        $cust_cif->PhoneNo3 = '';
        $cust_cif->HomeAddress1 = '';
        $cust_cif->HomeAddress2 = '';
        $cust_cif->HomeCity = '';
        $cust_cif->HomeZipcode = '';
        $cust_cif->CompanyAddress1 = '';
        $cust_cif->CompanyAddress2 = '';
        $cust_cif->CompanyCity = '';
    }

    public function userForm()
    {
        return view('opening.form');
    }
}
