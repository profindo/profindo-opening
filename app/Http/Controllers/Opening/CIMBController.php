<?php

namespace App\Http\Controllers\Opening;

use App\Http\Controllers\Controller;
use App\Models\Investor;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class CIMBController extends Controller
{
    public function __construct()
    {
        $this->client = Http::baseUrl(env('CIMB_URL', 'https://alphaapihub.cimbniaga.co.id:443/api-manager-external/alpha'));
    }

    public function applyHeaders(PendingRequest $request, String $req_method, $body = '""')
    {
        $body = json_encode($body);
        $req_body = base64_encode(md5(trim(preg_match('!!u', $body) ? $body : utf8_encode($body))));
        $req_time = strval(date('Y-m-d\TH:i:s.420P', time()));
        $hmacsignature = base64_encode(hash_hmac('sha256', $req_time.':'.config('services.cimb.key').':'.$req_method.':'.strval($req_body), true));
        info($req_time, $req_method, $req_body, $hmacsignature);
        $request->withHeaders([
            'CIMB-APIKey'       => config('services.cimb.key'),
            'CIMB-Signature'    => $hmacsignature,
            'CIMB-Service'      => 'B2B',
            'CIMB-Timestamp'    => $req_time,
            'Content-Type'      => 'application/json',
            'Request-ID'        => hash_hmac('sha256', $req_body, config('services.cimb.api_secret')),
        ]);
        return $request;
    }

    /**
     * Validate the account name and number.
     *
     * @param   string $name
     * @param   string $number
     * 
     * @return  bool   $result
     *
     */
    public function validateAccount($request)
    {
        $params = [
            'custInfo' => [
                'accountNo' => $request->input('cust_bank_no'),
                'dob'       => $request->input('cust_birth_date'),
            ]
        ];
        $response = $this->applyHeaders($this->client, 'POST', $params);
        $response = $response->post(config('services.cimb.url.etb_checking'))->json();
        
        if($response['statusCode'] != '200') {
            info($response);
            return $response['statusDesc'];
        }
        return 'Success';
    }

    public function generateRDN(Investor $investor)
    {
        
    }
}
