<!doctype html>
<html lang="en">
  <head>
    <title>Aprendiendo Boot</title>
    <script src="https://kit.fontawesome.com/4b793fdcfb.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
<!--<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.css">-->
<link rel="stylesheet" type="text/css" href="css/estiloPresentacion.css"> 
</head>

  <body class="bg-light">
<div class="container-fluid">
	
<div class="section">
  <header class="header">
   @include("layout.navbar.navbardos")
</header>
</div> <!-- Finaliza seccion de la barra de navegación-->

<!--Inicia Contenido -->
<div class="section border"><!--Inicia seccion de Contenido -->
<section>
  @yield("content")
</section>

<script type="text/javascript">
function muestra_oculta(id){
if (document.getElementById){ //se obtiene el id
var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
}
}

window.onload = function(){/*hace que se cargue la función lo que predetermina que div 
  estará oculto hasta llamar a la función nuevamente*/
muestra_oculta('oculto');/* "oculto" es el nombre que le dimos al DIV */
}


function ocultar(){
  document.getElementById('oculto').style.display="none";
}
function mostrar(){
  
  document.getElementById('oculto').style.display="block";
}

</script>
</div><!--Finaliza seccion de Contenido -->

<!--Finaliza Contenido -->

<div class="section"><!-- Sección de Pie de Pagina-->
	@include("layout.footer.footer")
</div> <!-- Finaliza Seccion de Pie de Pagina-->

</div> <!-- Finaliza container-->

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>

<!--
 <script type="text/javascript" src="resources/js/js.js"></script>

 <script src="{{ asset('js/js.js') }}"></script> -->
  </body>
</html>