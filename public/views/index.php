<!DOCTYPE html>
<html ng-app="PrimerModulo">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>restlaravel</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.min.js"></script>
	<script src="PrimerControl.js"></script>
	
</head>
<body ng-controller="PrimerControlador">

<ul>
		<li ng-repeat="post in posts">
			<h2>{{post.texto}}</h2>
			<h4>{{post.autor}}</h4>
		</li>
	</ul>
	
</body>
</html>