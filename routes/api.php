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
    Route::post('/enquiry', 'ApiController@enquiry');
    Route::post('/search-faq/{postcode}', 'ApiController@searchFaq');
    Route::get('/search-faq', 'ApiController@searchFaq');

    //TEST ROUTES
    Route::get('/testGet', 'ApiController@testGet');
    Route::post('/testPost', 'ApiController@testPost');
//    Route::get('/getHospitalsByDistance/{postcode}', 'ApiController@getHospitalsByDistance'); //DISABLED AS WE DON'T USE THIS ROUTE ( TESTING ONLY )
//    Route::get('/getAllHospitals', 'ApiController@getAllHospitals'); //DISABLED AS WE DON'T USE THIS ROUTE ( TESTING ONLY )

});
