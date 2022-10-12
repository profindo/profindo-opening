<?php

namespace App\Http\Controllers\Opening;

use App\Http\Controllers\OpeningAccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SinarmasController extends OpeningAccountController
{
    public function __construct()
    {
        $this->client = Http::baseUrl(env('SINARMAS_URL', 'https://apidev.banksinarmas.com'));
    }

    private function getOAuthToken()
    {

    }
}
