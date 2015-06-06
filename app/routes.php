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

Route::get('/', function(){
	return View::make('pages.index');
});

Route::get('login', function(){
	return View::make('pages.login');
});

Route::post('login', ['uses' => 'LoginController@login']);

Route::get('api/users', 'UsersController@index');
Route::get('api/promos', 'PromosController@index');

