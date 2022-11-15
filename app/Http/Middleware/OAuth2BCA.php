<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class OAuth2BCA
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
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
        return $response['access_token'];
    }

    public function applyHeaders(Request $request, String $req_method, String $relative_url, $body = '')
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
}
