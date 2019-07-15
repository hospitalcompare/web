<?php

use Illuminate\Http\Request;

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

Route::middleware('checkToken')->group(function () {
    Route::post('/import', 'ApiController@import');
    Route::get('/getLocations/{postcode}', 'ApiController@getLocations');
    Route::get('/getHospitalsByDistance/{postcode}', 'ApiController@getHospitalsByDistance');
});
