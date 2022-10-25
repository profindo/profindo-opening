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

Route::controller(OpeningAccountController::class)->group(function () {
    Route::get('/register', 'register');
});

Route::group(['prefix'=>'bca', 'middleware'=>['web']], function () {
    Route::post('/validate', [BCAController::class, 'validateUser']);
});

Route::group(['prefix'=>'sinarmas', 'middleware'=>['web']], function () {
    Route::post('/validate', [SinarmasController::class, 'validateUser']);
});

Route::get('/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/form');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/form', function () {
    return view('opening.personal_info');
})->name('form.personal_info');
