@extends('template.plantilla_bravo')
@section('content')
  
<!--Inicia Contenido -->
<div class="border"><!--Inicia seccion de Contenido -->
  <div class="title text-center border"> <h1 class="font-weight-bold">Tipos de Baterias</h1></div>
</div>
<div class="row  align-items-center text-justyfi">
<div class="col-12 title text-center">                    
  </div>
<div class="col-12 col-sm-12 col-md-6 ">
                  <img src="img/minio2.png" class="img-fluid" alt="Responsive image">
  <!--<h7>Imagen De referencia, tomada de: <a href="#m">www.link.co</a></h7> -->
    </div>
    <div class="desarolloTema col-12 col-sm-12 col-md-6 text-justify overflow-auto"> 
            <center><h3>GEL</h3></center>
            <p class="text-justyfi"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
    </div>
</div> 
  <div class="fichas">
<div class="row">
  <div class="col-12 col-sm-12 col-md-12">
    <a class="btn bg-transparent rounded-pill btn-block  text-center border" role="button" id="botonzoom"  value="mostrar" onClick="muestra_oculta('oculto')"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png">Ampliar Información</a>

  </div>

  <div class="col-12 col-sm-12 col-md-4">
      <a class="btn rounded-pill btn-block bg-transparent text-center border" role="button" id="botonzoom" href="{{asset('bateria_tema2.1') }}">< Anterior</a>
  </div>
  <div class="col-12 col-sm-12 col-md-4 ">
    <a class="btn rounded-pill btn-block bg-transparent text-center border" role="button" id="botonzoom" href="{{asset('baterias') }}">Inicio</a>
  </div>  
  <div class="col-12 col-sm-12 col-md-4 ">
    <a class="btn rounded-pill btn-block bg-transparent text-center border" role="button" id="botonzoom" href="{{asset('bateria_tema2.3') }}">Siguiente ></a>
  </div>
</div>   
  </div>

  <div class="contenidoOculto overflow-auto text-justify" id="oculto" > <!--Inicia seccion oculto -->
  <!--<script type="text/javascript" src="js/js.js"></script>-->
  <p class="text-justyfi">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

</p>
                       
  <a class="btn rounded-pill btn-block bg-transparent text-center border" role="button" id="botonzoom"     value="mostrar" onclick="ocultar();"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png" alt="ImgReference">Cerrar Información</a>
</div> <!--Finaliza seccion oculto -->
@endsection
