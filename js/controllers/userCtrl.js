app.controller('userCtrl', ['$scope', 'githubService', function($scope, githubService){
	$scope.users = []; 
	
	$scope.getUsers = function(){
			githubService.getAll().success(function(data){
			$scope.users = data;		
		});
	}	
}]);
