<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpeningAccountController;
use App\Http\Controllers\Opening\BCAController;
use App\Http\Controllers\Opening\SinarmasController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/verify', [OpeningAccountController::class, 'verifyEmail'])->name('verification.notice');
Route::get('/app', function () {return view('layout.app');});

Route::group(['prefix'=>'surat', 'middleware'=>['web']], function () { 
    Route::get('ketentuan-tabungan', fn () => view('surat.ketentuan-tabungan'));
    Route::get('pernyataan-nasabah-rdn-bca', fn () => view('surat.pernyataan-nasabah-rdn-bca'));
    Route::get('perjanjian-pembukaan-rekening', fn () => view('surat.perjanjian-pembukaan-rekning'));
    Route::get('surat-pernyataan-kuasa', fn () => view('surat.surat-pernyataan'));
});

Route::post('/validate', [OpeningAccountController::class, 'validateUser']);

Route::group(['prefix'=>'api', 'middleware'=>['api']], function () {
    Route::post('/bca', [BCAController::class, 'applyHeaders'])->middleware('oauth2_bca');
});

Route::post('/mail/verify', [OpeningAccountController::class, 'verifyEmail'])->name('verification.verify');

Route::get('/form', function () {
    return view('opening.personal_info');
})->middleware(['auth'])->name('form.personal_info');
