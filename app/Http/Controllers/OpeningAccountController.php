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
        return view('start')
        ->with('faqs', [[
                'q' => 'Berapa lama proses penarikan dana?',
                'a' => 'T+2 hari bursa sejak Nasabah melakukan penjualan.',
            ], [
                'q' => 'Kenapa ada pemotongan cash di RDN saya sebesar Rp 16.500',
                'a' => 'Ada biaya charge OLT per bulan untuk Nasabah online trading (OLT)',
            ], [
                'q' => 'Bagaimana melakukan reset password dan pin?',
                'a' => 'Nasabah bisa email ke customer service, dengan menyebutkan permasalahan dan nomor Nasabah (user id)',
            ], [
                'q' => 'Kenapa akun saya di suspend?',
                'a' => 'Nasabah bisa telepon ke customer service perihal suspend, agar kami mencari tahu kendalanya'
            ], [
                'q' => 'Saya melakukan top up dana, namun belum masuk ke Aplikasi Proclick',
                'a' => 'Biasanya, 10 menit dana akan otomatis masuk ke Aplikasi, jika belum terlihat di tampilan portofolio. Nasabah bisa email ke customer service dan  melampirkan bukti transfer berhasil.'
            ], [
                'q' => 'Bagaimana cara melakukan penarikan dana via Aplikasi Proclick?',
                'a' => 'Menu customer service – cash withdrawal – masukkan jumlah dana - submit'
            ], [
                'q' => 'Perhitungan Average Price di portofolio saya yang berbeda',
                'a' => 'Average price dihitung pada akhir sesi. Untuk contoh kasus Nasabah harus dilihat dari history pembelian'
            ], [
                'q' => 'Apa perbedaanya CASH dan CASH ON T+2 dmenu portofolio?',
                'a' => 'Cash dana yang ada di RDN, dan bisa di ambil untuk penarikan dana
                        Kalau CASH ON T+2, dana yang akan masuk ke RDN Nasabah dari hasil penjualan'
            ], [
                'q' => 'Bagaimana cara mengetahui SID dan SRE Nasabah, atau informasi Pribadi lainnya?',
                'a' => 'Nasabah bisa email ke customer service, dengan menyebutkan permintaan kebutuhan serta infokan nama KTP/ nomor Nasabah (user id)'
            ], [
                'q' => 'Bagaimana cara beli saham via E-IPO',
                'a' => 'Pesanan via e-ipo melalui website https://www.e-ipo.co.id/en'
            ]
        ]);
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
            $user_cif->email = $user->email;
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

    public function userForm()
    {
        return view('opening.form');
    }
}
