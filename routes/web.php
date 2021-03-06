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

Route::get('/', function () {
    return view('layouts.base');
});
Route::domain('www.queproponen.com.ar')->group(function () {
	Route::permanentRedirect('/', 'http://queproponen.com.ar');
});

Route::prefix('/api')->group(function (){
	//parties
	Route::get('parties', "PartiesController@index");
	Route::get('party/{party}', "PartiesController@show");
//candidate
	Route::get('party/{party}/candidates', "CandidatesController@byParty");
//proposals
	Route::get('party/{party}/proposals', "ProposalsController@getByCategory");
	Route::get('proposals', "ProposalsController@index");
	Route::post('proposals', "ProposalsController@store");
//categories
	Route::get('categories', "CategoriesController@index");

});
Route::get('/terms', function(){
	return response()->file( storage_path( 'app/public/Terminos.pdf'));
})->name('home.terms');
