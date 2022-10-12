<?php

namespace App\Http\Controllers\Opening;

use App\Http\Controllers\OpeningAccountController;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BCAController extends OpeningAccountController
{
    public function __construct()
    {
        $this->client = Http::baseUrl(env('BCA_URL', 'https://devapi.klikbca.com'));
    }

    private function getOAuthToken()
    {
        $response = Http::withHeaders([
            'Host' => env('BCA_URL'),
            'Authorization' => 'Basic '.base64_encode(config('services.bca.id').':'.config('services.bca.client_secret')),
            'Content-Type'  => 'application/x-www-form-urlencoded',
            #'grant_type'    => 'client_credentials',
        ])->post(env('BCA_URL', 'https://devapi.klikbca.com').config('services.bca.url.oauth_token'));
        
        return $response->json('access_token');
    }

    public function applyHeaders(PendingRequest $request, String $req_method, String $relative_url, $body = '')
    {
        $access_token = $this->getOAuthToken();
        if(!isset($access_token['access_token']))
        {
            return response()->json(['status'=>'error', 'error'=>$access_token['error_message']['indonesian']]);
        }
        $req_body = hash('sha256', trim($body));
        $req_time = date('c', time());
        $stringToSign = $req_method.':'.$relative_url.':'.$access_token.':'.$req_body.':'.$req_time;
        $request->withHeaders([
            'Authorization'     => 'Bearer '.$access_token,
            'Content-Type'      => 'application/json',
            'Origin'            => env('APP_URL'),
            'X-BCA-Key'         => config('services.bca.key'),
            'X-BCA-Timestamp'   => date('c', time()),
            'X-BCA-Signature'   => hash_hmac('sha256', env('API_SECRET'), $stringToSign),
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

    public function validateUser(Request $request)
    {
        #$validation = OpeningAccountController::validateUser($request);
        #if($validation->fails()) return response()->json(['status'=>'failure', 'error'=>$validation->errors()->all()]);
        $url = sprintf(config('services.bca.url.validate_account'), $request->input('custBankNo'));
        $response = $this->applyHeaders($this->client, 'GET', $url);
        $response = $response->get($url, [
            'Action'    => 'validate',
            'By'        => 'name',
            'Value'     => $request->input('custBankName'),
        ]);
        if($response->status() != 200){
            return $response;
        }
        return response()->json(['status'=>'success', 'data'=>$response->json()], 200);
    }
}
