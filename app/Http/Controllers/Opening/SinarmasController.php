<?php

namespace App\Http\Controllers\Opening;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SinarmasController extends Controller
{
    public function __construct()
    {
        $this->client = Http::baseUrl(env('SINARMAS_URL', 'https://apidev.banksinarmas.com'));
    }

    private function getOAuthToken()
    {
        $response = Http::withHeaders([
            'Host' => env('SINARMAS_URL'),
            'Authorization' => 'Basic '.base64_encode(config('services.bca.id').':'.config('services.bca.client_secret')),
        ])->withBody(
            'grant_type=client_credentials',
            'application/x-www-form-urlencoded'
        )->post(env('BCA_URL', 'https://devapi.klikbca.com:9443').config('services.bca.url.oauth_token'));
        return $response['access_token'];
    }
}
