<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpeningAccountController;
use App\Http\Controllers\Opening\BCAController;
use App\Http\Controllers\Opening\SinarmasController;
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

Route::get('/phpinfo', fn () => view('phpinfo'));

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'surat', 'middleware'=>['web']], function () { 
    Route::get('ketentuan-tabungan', fn () => view('surat.ketentuan-tabungan'));
    Route::get('pernyataan-nasabah-rdn-bca', fn () => view('surat.pernyataan-nasabah-rdn-bca'));
    Route::get('perjanjian-pembukaan-rekening', fn () => view('surat.perjanjian-pembukaan-rekning'));
    Route::get('surat-pernyataan-kuasa', fn () => view('surat.surat-pernyataan'));
});

Route::controller(OpeningAccountController::class)->group(function () {
    Route::get('/register', fn () => 'register');
});

Route::group(['prefix'=>'bca', 'middleware'=>['web']], function () {
    Route::post('/validate', [BCAController::class, 'validateUser']);
});

Route::group(['prefix'=>'sinarmas', 'middleware'=>['web']], function() {
    Route::post('/validate', [SinarmasController::class, 'validateUser']);
});
