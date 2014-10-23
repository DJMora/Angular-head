<!DOCTYPE html>
<html ng-app="app">
	<head>
		<title>Head.JS Test</title>
		<link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css"/>
	</head>

	<body class="container">
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
		    	<div class="navbar-header">
		      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
		      		</button>
		      		<a class="navbar-brand" href="#">
				Angular-Head
		      		</a>
		    	</div>
		    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Get started</a></li>
        				<li><a href="#/dir">User directory</a></li>
				</ul>
			</div>
		  </div>
		</nav>
		<section ng-view></section>
	</body>
	<script src="vendor/headjs/head.js" data-headjs-load="js/init.js"></script>
</html>
