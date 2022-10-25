<?php

namespace App\Http\Controllers\Opening;

use App\Http\Controllers\InvestorController;
use App\Http\Controllers\OpeningAccountController;
use App\Http\Requests\InvestorRequest;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BCAController extends OpeningAccountController
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
        info($response->json());
        return $response['access_token'];
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
        /*
        * Authorization   = "Bearer {OAuth2 token}
        * Content-Type    = "app/json"
        * Origin          = "https://www.profindo.com/"
        * X-BCA-Key       = "env(API Key)"
        * X-BCA-Timestamp = "yyy-MM-ddThh:mi:ss.sssTZD"
        * X-BCA-Signature = 
        */
    }

    public function validateUser(InvestorRequest $request)
    {
        $params = [
            'Action'    => 'validate',
            'By'        => 'name',
            'Value'     => $request->input('custBankName'),
        ];
        $relative_url = sprintf(config('services.bca.url.validate_account'), $request->input('custBankNo')).'?'.http_build_query($params);
        $response = $this->applyHeaders($this->client, 'GET', $relative_url);
        $response = $response->get($relative_url);
        
        if($response->status() != 200){
            return $response;
        }

        OpeningAccountController::sendVerificationEmail($request);

        return response()->json($response->json(), 200);
    }
}
