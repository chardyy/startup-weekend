<?php

	Route::group(['prefix' => 'promos'], function(){
		Route::resource('redeem','PromoRedeemController');

		Route::group(['prefix' => 'redeem-codes'], function(){
			Route::post('activation-validation/{token}', ['uses' => 'PromoRedeemCodeController@setStatus']);
		});
	});

	Route::resource('promos', 'PromosController',['only' => 'index']);
	Route::resource('promo', 'PromosController',['only' => ['create','show','update','destroy','edit']]);
