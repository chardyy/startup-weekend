'use strict';

angular.module('LibreApp', ['ngRoute', 'ngResource'])
	   .config(function($routeProvider, $locationProvider){

	   	$routeProvider
	   		.when('/',{
	   			//controller: 'LoginController',
	   			templateUrl: 'views/index.html'
	   		});

	   	$locationProvider.html5Mode(true);
	   	
});
