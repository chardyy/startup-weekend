'use strict';

angular.module('LibreApp', ['ngRoute', 'ngResource'])
	   .config(function($routeProvider, $locationProvider){

	   	$routeProvider
	   		.when('/login',{
	   			controller: 'LoginController',
	   			templateUrl: 'views/login.html'
	   		})
	   		
	   		.otherwise({
	   			redirectTo: '/'
	   		});

	   	$locationProvider.html5Mode(true);
});
