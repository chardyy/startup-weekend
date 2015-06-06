<?php

	Route::resource('promos', 'PromosController',['only' => 'index']);
	Route::resource('promos', 'PromosController',['only' => ['create','show','update','destroy','edit']]);

