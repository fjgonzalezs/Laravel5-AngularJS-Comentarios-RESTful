angular.module("PrimerModulo",[])
.controller("PrimerControlador",function($scope,$http){
	$scope.posts= [];
	$scope.nuevoPost = {};
	$http.get("../api/comentarios")
		.success(function(data){
			console.log(data);
			$scope.posts = data;
	
		})
		.error(function(err){


		});
		});

//este no es el controlador que se usa