var app = angular.module('app', ['ngRoute']);

app.config(['$routeProvider', function($routeProvider){
	$routeProvider.
		when('/', {
			templateUrl: 'angular_partials/start.html',
			controller: 'userCtrl'
		}).
		when('/dir', {
			templateUrl: 'angular_partials/directory.html',
			controller: 'userCtrl'
		}).
		otherwise({
			redirectTo: '/'
		});	
}]);
