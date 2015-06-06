'use strict';

angular.module('loginService', [])

.factory('Login', function($http){

	var userFactory = {};

	userFactory.create = function(userData){
		return $http.post('/api/users', userData);
	}

	userFactory.all = function(){
		return $http.get('/api/users');
	}

	return userFactory;
});