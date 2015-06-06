<?php

	Route::resource('users', 'UsersController',['only' => 'index']);
	Route::resource('user', 'UsersController',['only' => ['create','show','update','destroy','edit']]);