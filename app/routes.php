<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('login', array('uses' => 'LoginController@showLogin'));
Route::post('login', array('uses' => 'LoginController@doLogin'));

Route::group(array('before' => 'auth'), function() {

	Route::get('/', 'HomeController@servePage');
	Route::get('/addcase', 'AddcaseController@servePage');

	Route::post('/addcase', 'AddcaseController@store');

	Route::get('/browse', 'BrowseController@servePage');

	Route::get('/case/{id}', 'CaseController@servePage');
	Route::post('/case/{id}', 'CaseController@store');
	
	Route::get('logout', array('uses' => 'LoginController@doLogout'));

});