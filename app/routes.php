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

Route::get('/', function()
{
	return View::make('pages.home');
});

Route::get('/login', function()
{
	return View::make('pages.login');
});

Route::get('/addcase', function()
{
	return View::make('pages.addcase');
});

Route::get('/browse', function()
{
	return View::make('pages.browse');
});

Route::get('/case', function()
{
	return View::make('pages.case');
});