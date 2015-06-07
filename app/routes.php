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

Route::group(['prefix' => 'promos'], function(){
	Route::get('create', ['uses' => 'PromoController@create', 'as' => 'page.promos.create']);
});

Route::post('login', ['uses' => 'LoginController@login']);


Route::group(['prefix' => 'api'], function(){
	include('routes/api/promos.php');
	include('routes/api/users.php');

});


Route::post('login', ['uses' => 'LoginController@login']);

