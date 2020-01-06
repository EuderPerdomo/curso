<!doctype html>
<html lang="en">
  <head>
    <title>Aprendiendo Boot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>

  <body >

  <!--	<h1>¡¡¡Voy a aprender Boot y CSS!!!</h1>
 -->
   <div class="container-fluid  bg-light">
 
<!-- Barra de navegacion-->
<div class="section">
  <header class="header">
	<!--  bg-primary 
   <nav class="navbar transparent navbar-inverse navbar-expand-lg navbar-light" >

  -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">   
  <a class="navbar-brand" href="home"> <img src="img/logo2.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="paneles">Paneles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="controladores">Controladores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inversores">Inversores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="baterias">Baterias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inversor_tema2.3">Hibridos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="calculadora">Calculadora</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Conceptos Importantes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="antesIniciar">Antes De Iniciar</a>
            <a class="dropdown-item" href="normatividad">Normatividad</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="paraFinalizar">Para Finalizar</a>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 bg-light" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>

</div>

<!--carousel -->
<div class="bd-example" id="carro">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/fondocurso.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/fondo.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/fondo.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- contenido-->
<!-- contenido d eprueba -->

<!--finaliza contenido de prueba-->
<section>
	<div class="row">


<div class="col-12 col-md-3  " align="center" >
      <div class="card" style="width:auto;">
  <img src="img/ises.jpg" class="card-img-top" alt="...">
  <div class="card-body text-justify">
    <h5 class="card-title">Curso</h5>
    <p class="card-text" id="panel">Conosca los conceptos principales de la energia solar</p>
    <a href="antesIniciar" class="btn bg-success btn-block">Iniciar</a>
  </div>
</div>
    </div>


		<div class="col-12 col-md-3  " align="center" >
			<div class="card" style="width:auto;">
  <img src="img/panel.jpg" class="card-img-top" alt="...">
  <div class="card-body text-justify">
    <h5 class="card-title">Paneles</h5>
    <p class="card-text" id="panel">Aprenda aqui muchos temas interesantes sobre los paneles solares</p>
    <a href="paneles" class="btn bg-success btn-block">Iniciar</a>
  </div>
</div>
		</div>

<div class="col-12  col-md-3" align="center">
			<div class="card" style="width:auto;">
  <img src="img/inversor.jpg" class="card-img-top" alt="...">
  <div class="card-body text-justify">
    <h5 class="card-title">Inversores</h5>
    <p class="card-text">Aprende sobre los principales tipos de inversores solares y sus usos</p>
    <a href="inversores" class="btn bg-success btn-block">Iniciar</a>
  </div>
</div>
		</div>

<div class="col-12  col-md-3 " align="center">
			<div class="card" style="width:auto;">
  <img src="img/controlador.jpg" class="card-img-top" alt="...">
  <div class="card-body text-justify">
    <h5 class="card-title">Controladores</h5>
    <p class="card-text">Descubre los principales tipos de controladores y aprende sobre su uso</p>
    <a href="controladores" class="btn bg-success btn-block">Iniciar</a>
  </div>
</div>
		</div>

<div class="col-12  col-md-3" align="center">
			<div class="card" style="width:auto;"> <!--style="width: 18rem; -->
  <img src="img/hibrido.jpg" class="card-img-top" alt="...">
  <div class="card-body text-justify">
    <h5 class="card-title">Hibridos</h5>
    <p class="card-text">Conoce los dispositivos hibridos asi como sus implementaciones</p>
    <a href="inversor_tema2.3" class="btn bg-success btn-block">Iniciar</a>
  </div>
</div>
		</div>
	</div>
	<div class="row">
	
			<div class="col-12  col-sm-12 col-md-6 col-lg-3"align="center" >
			<div class="card" style="width: auto;">
  <img src="img/bateria.png" class="card-img-top" alt="...">
  <div class="card-body text-justify">
    <h5 class="card-title">Baterias</h5>
    <p class="card-text">Descubre las diferentes opciones de baterias a usar en los sistemas de energia soalar asi como sus principales caracteristicas, ventajas y desventajas</p>
    <a href="baterias" class="btn bg-success btn-block">Iniciar</a>
  </div>
</div>
		
		</div>

			<div class="col-12  col-sm-12 col-md-6 col-lg-3 " align="center">
			<div class="card" style="width: auto;">
  <img src="img/calc.jpg" class="card-img-top" alt="...">
  <div class="card-body text-justify">
    <h5 class="card-title">Calculadora</h5>
    <p class="card-text">Ingresa a Nuestra Calculadora Online y calcula tu propio sistema de energia fotovoltaica basado en tus consumos mensuales o diarios.</p>
    <a href="calculadora" class="btn bg-success btn-block">Iniciar</a>
  </div>
</div>
		</div>
		
	</div>
</section>

   </div> <!-- Cierra div de container-->
   <div class="container-fluid">
<section>
<footer class="bg-dark">
  <div class="row">
    <div class="col-md-6">
         <h5 class="text-uppercase"><img src="img/logo2.png"></h5>
          <p>Siguenos</p>
<p>Enlaces a Redes Sociales</p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="#"> E.F.P.O</a>
    </div>
    <!-- Copyright -->
    </div>
  </div>

</footer>
</section>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
  </body>
</html>