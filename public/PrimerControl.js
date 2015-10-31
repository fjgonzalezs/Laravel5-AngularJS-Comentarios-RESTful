angular.module("PrimerModulo",[])
.controller("PrimerControlador",function($scope,$http){

	$scope.posts= [];

	// loading variable to show the spinning loading icon
    $scope.loading = true;

	$scope.nuevoPost = {};
	$http.get("/api/comentarios")
		.success(function(data){
			console.log(data);
			$scope.posts = data;
			 $scope.loading = false;
	
		})
		.error(function(err){


		});

		$scope.agregapost=function(){
			 $scope.loading = true;

			$http.post("/api/comentarios",{
				texto: $scope.nuevoPost.texto,
				autor: $scope.nuevoPost.autor
			})
			.success(function(data,status,headers,config){
			$scope.posts.push($scope.nuevoPost); //agrega al final de la lista
			$scope.nuevoPost={}; 
			
			$http.get("/api/comentarios")
		.success(function(data){
			console.log(data);
			$scope.posts = data;
			 $scope.loading = false;
	
		})
		.error(function(err){


		});
				

			})
			.error(function(error,status,headers,config){
				console.log(error);

			});

		}

		$scope.eliminarpost=function(id){
			$scope.loading = true; 

			$http.delete('/api/comentarios/' + id)
			.success(function(data){

			$http.get("/api/comentarios")
		.success(function(data){
			console.log(data);
			$scope.posts = data;
			 $scope.loading = false; //actualizar datos
	
		})
		.error(function(err){


		});	


			})
			.error(function(error,status,headers,config){
				console.log(error);

			});


		}


		});

