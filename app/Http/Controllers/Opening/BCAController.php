<?php

namespace App\Http\Controllers\Opening;

use App\Http\Controllers\Controller;
use App\Models\Investor;
use Exception;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class BCAController extends Controller
{
    public function __construct()
    {
        $this->client = Http::baseUrl(env('BCA_URL', 'https://devapi.klikbca.com:9443'));
    }

    private function getOAuthToken()
    {
        $response = Http::withHeaders([
            'Host' => env('BCA_URL'),
            'Authorization' => 'Basic '.base64_encode(config('services.bca.id').':'.config('services.bca.client_secret')),
        ])->withBody(
            'grant_type=client_credentials',
            'application/x-www-form-urlencoded'
        )->post(env('BCA_URL', 'https://devapi.klikbca.com:9443').config('services.bca.url.oauth_token'));
        try {
            return $response['access_token'];
        } catch(Exception $e) {
            info($response);
            return $response['ErrorMessage']['Indonesian'];
        }
    }

    public function applyHeaders(PendingRequest $request, String $req_method, String $relative_url, $body = '')
    {
        $access_token = $this->getOAuthToken();
        $req_body = hash('sha256', trim($body));
        $req_time = date('Y-m-d\TH:i:s.420P', time());
        $stringToSign = $req_method.':'.strval($relative_url).':'.strval($access_token).':'.strval($req_body).':'.strval($req_time);
        $request->withHeaders([
            'Authorization'     => 'Bearer '.$access_token,
            'Content-Type'      => 'application/json',
            'Origin'            => env('APP_URL'),
            'X-BCA-Key'         => config('services.bca.key'),
            'X-BCA-Timestamp'   => strval($req_time),
            'X-BCA-Signature'   => hash_hmac('sha256', $stringToSign, config('services.bca.api_secret') ),
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
            'Action'    => 'validate',
            'By'        => 'name',
            'Value'     => $request->input('cust_bank_name'),
        ];
        $relative_url = sprintf(config('services.bca.url.validate_account'), $request->input('cust_bank_no')).'?'.http_build_query($params);
        $response = $this->applyHeaders($this->client, 'GET', $relative_url);
        info($relative_url);
        $response = $response->get($relative_url)->json();
        info($response);
        
        if($response) {
            info($response);
            return $response['ErrorMessage']['Indonesian'];
        }
        return 'Success';
    }

    public function generateRDN(Investor $investor)
    {
        
    }
}
