app.factory('githubService', function($http){
	var githubService = {};

	githubService.getAll = function(){
		return $http.get('https://api.github.com/users?since=135');
	}

	return githubService;
});
