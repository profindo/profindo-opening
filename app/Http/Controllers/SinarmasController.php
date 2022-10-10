<?php

namespace App\Http\Controllers;

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

    }
}
