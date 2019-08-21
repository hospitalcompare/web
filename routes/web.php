<?php

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

Route::get('/','WebController@homepage');

Route::get('/results-page','WebController@resultsPage');

Route::get('/test-page','WebController@testPage');

//Route::get('/cookie-policy','WebController@contentPage');

Route::get('/{slug}', 'WebController@contentPage'); //This replaces all the individual routes
//
//Route::get('/{slug}', function ($slug) {
//
//    // slug other url, subfolders also
//    return view('pages.contentpage')->with(['slug' => $slug]);
//
//})->where('slug', '.*');
