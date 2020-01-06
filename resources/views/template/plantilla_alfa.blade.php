<!doctype html>
	<html lang="en">
	  <head>
	    <title>Aprendiendo Boot</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta http-equiv="x-ua-compatible" content="ie-edge">
	<!--<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	  </head>

	  <body class="bg-light">

	<div class="container-fluid">
		

	<div class="section">
	  <header class="header">
	 @include("layout.navbar.navbar")
	</header>
	</div>

	<!-- 
	iNICIA cONTENIDO
	-->

	<!-- Seccion de Temario-->

@yield("content")


	<!-- Seccion de Pie de Pagina-->
	<div class="section">
	@include("layout.footer.footer")
	</div>

	<!-- 
	fINALIZA cONTENIDO
	-->
	    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
	  </body>
	</html>