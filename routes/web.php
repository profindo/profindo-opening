<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/surat-pernyataan-kuasa', function () {
    return view('pages.surat-pernyataan');
});

Route::get('/perjanjian-pembukaan-rekening', fn () => view('pages.perjanjian-pembukaan-rekning'));

Route::get('/pernyataan-nasabah-rdn-bca', fn () => view('pages.pernyataan-nasabah-rdn-bca'));

Route::get('/ketentuan-tabungan', fn () => view('pages.ketentuan-tabungan'));
