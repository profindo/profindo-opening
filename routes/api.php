<?php

use App\Http\Controllers\UserController;
use App\Models;
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

Route::group(['prefix'=>'v1', 'middleware'=>['api']], function() {
    Route::post('/province/{prov}', function(Models\Province $prov){ return $prov->city;})->name('api.province.list');
    Route::post('/city/{city}', function(Models\City $city){ return $city->district;})->name('api.city.list');
    Route::post('/district/{dis}', function(Models\District $dis){ return $dis->subdistrict;})->name('api.district.list');
});
