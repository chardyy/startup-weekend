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


Route::get('/', 'PagesController@index');

Route::get('login', 'UsersController@index');

Route::post('login', ['as' => 'login_path','uses' => 'UsersController@login']);

Route::get('create-promotion', ['uses' => 'PromosController@index']);
//for posting of promo

Route::post('create-promotion', ['as' => 'promo_path', 'uses' => 'PromosController@store']);

//clicking details

Route::get('details', 'PagesController@details');

//logout

Route::get('logout', 'UsersController@logout');


/*
Route::get('create-promotion', function(){
	return View::make('pages.create-promotion');
});

Route::get('details', function(){
	return View::make('pages.details');
});
Route::post('create-promotion', 'PromosController@create');


//for the api
Route::group(['prefix' => 'api'], function(){
	include('routes/api/promos.php');
	include('routes/api/users.php');

});
*/


