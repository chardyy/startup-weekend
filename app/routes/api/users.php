<?php

	Route::resource('users', 'UsersController',['only' => 'index']);
	Route::resource('user', 'UsersController',['only' => ['create','store','show','update','destroy','edit']]);