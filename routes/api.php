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
    Route::post('/createEnquiriesFile', 'ApiController@createEnquiriesFile');
    Route::get('/getHospitalsByIds/{hospitalIds}/{procedureId}', 'ApiController@getHospitalsByIds');
    Route::get('/createHospitalImagesThumbs', 'ApiController@createHospitalImagesThumbs');
    Route::post('/survey', 'ApiController@createSurvey');
    Route::get('/generateSitemap', 'ApiController@generateSitemap');
    Route::post('/faqs', 'ApiController@faqs');
    Route::post('/getProcedures', 'ApiController@getProceduresForDropdowns');
    Route::get('/getAllHospitals', 'ApiController@getAllHospitals');
    Route::get('/getHospitalsForHomepageSearch/{postcode?}/{procedureId?}/{radius?}', 'ApiController@getHospitalsForHomepageSearch'); // Given a procedure id, return the parent specialty

    //TEST ROUTES
    Route::get('/testGet', 'ApiController@testGet');
    Route::post('/testPost', 'ApiController@testPost');
//    Route::get('/getHospitalsByDistance/{postcode}', 'ApiController@getHospitalsByDistance'); //DISABLED AS WE DON'T USE THIS ROUTE ( TESTING ONLY )


});
