<?php

use App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');
Route::get('/verify', [Controllers\OpeningAccountController::class, 'verifyEmail'])->name('verification.notice');
Route::get('/app', function () {return view('layout.app');});
Route::any('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::group(['prefix'=>'surat', 'middleware'=>['web']], function () { 
    Route::get('ketentuan-tabungan', fn () => view('surat.ketentuan-tabungan'));
    Route::get('pernyataan-nasabah-rdn-bca', fn () => view('surat.pernyataan-nasabah-rdn-bca'));
    Route::get('perjanjian-pembukaan-rekening', fn () => view('surat.perjanjian-pembukaan-rekning'));
    Route::get('surat-pernyataan-kuasa', fn () => view('surat.surat-pernyataan'));
});

Route::post('/validate', [Controllers\OpeningAccountController::class, 'validateUser'])->name('validate');

Route::group(['prefix'=>'api', 'middleware'=>['api']], function () {
    Route::post('/bca', [Controllers\Opening\BCAController::class, 'applyHeaders'])->middleware('oauth2_bca');
});

Route::post('/mail/verify', [Controllers\OpeningAccountController::class, 'verifyEmail'])->name('verification.verify');

Route::group(['prefix'=>'user', 'middleware'=>['web', 'auth', 'ajax']], function () {
    Route::get('index');
    Route::get('view');
    Route::get('create');
    Route::post('store', [Controllers\InvestorController::class, 'store'])->name('investor.store');
    Route::get('edit', [Controllers\InvestorController::class, 'edit'])->name('investor.edit');
    Route::post('update', [Controllers\InvestorController::class, 'update'])->name('investor.update');
    Route::post('delete');
});

Route::get('/form', function () {
    return view('opening.default')->with('investor', Auth::user()->investor);
})->middleware(['auth'])->name('form.default');

//Legacy reasons
Route::group(['middleware'=>['web']], function () { 
    Route::get('ketentuan-tabungan', fn () => view('surat.ketentuan-tabungan'));
    Route::get('pernyataan-nasabah-rdn-bca', fn () => view('surat.pernyataan-nasabah-rdn-bca'));
    Route::get('perjanjian-pembukaan-rekening', fn () => view('surat.perjanjian-pembukaan-rekning'));
    Route::get('surat-pernyataan-kuasa', fn () => view('surat.surat-pernyataan'));
});