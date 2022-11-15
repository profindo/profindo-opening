<?php

use App\Http\Controllers\UserController;
use App\Models\City;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'v1', 'middleware'=>['api', 'web']], function() {
    Route::get('/province/{prov}', function (Province $prov) {
        return $prov->city;
    })->name('api.province.list');
    Route::get('/city/{city}', function (City $city) {
        return $city->district;
    })->name('api.city.list');
    Route::get('/district/{dis}', function (District $dis) {
        return $dis->subdistrict;
    })->name('api.district.list');
});
