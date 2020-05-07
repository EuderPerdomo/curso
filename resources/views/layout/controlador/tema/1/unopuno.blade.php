@extends('template.plantilla_bravo')

@section('content')
  
<!--Inicia Contenido -->
<div class="border"><!--Inicia seccion de Contenido -->
  <div class="title text-center border"> <h1 class="font-weight-bold">Controladores o Reguladores de Carga</h1></div>
</div>
<div class="row  align-items-center text-justyfi">
<div class="col-12 title text-center">                    
  </div>
<div class="col-12 col-sm-12 col-md-6 ">
                  <img src="img/fondo.jpg" class="img-fluid  " alt="Responsive image">
  <!--<h7>Imagen De referencia, tomada de: <a href="#m">www.link.co</a></h7> -->
    </div>


    <div class="col-12 col-sm-12 col-md-6 text-justyfi">
      
            <p class="text-justyfi">Los paneles solares o tambien llamados modulos fotovoltaicos son los responsables de captar la radiación proveniente del sol y trasformarla en energia que podemos aprovechar para alimentar nuestros hogares y mucho mas.</p>
            <p>Constan de la unión de varias celulas solares las cuales al sumar sus capacidades nos brindan la posibilidad de aprove</p>
    </div>
</div> 
  <div class="fichas">
<div class="row">
  <div class="col-12 col-sm-12 col-md-12">
    <a class="btn bg-transparent rounded-pill btn-block  text-center border" role="button" id="botonzoom"  value="mostrar" onClick="muestra_oculta('oculto')"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png">Ampliar Información</a>

  </div>

  <div class="col-12 col-sm-12 col-md-4">
      <a class="btn rounded-pill btn-block bg-transparent text-center border" role="button" id="botonzoom" >< Anterior</a>
  </div>
  <div class="col-12 col-sm-12 col-md-4 ">
    <a class="btn rounded-pill btn-block bg-transparent text-center border" role="button" id="botonzoom" >Inicio</a>
  </div>
  <div class="col-12 col-sm-12 col-md-4 ">
    <a class="btn rounded-pill btn-block bg-transparent text-center border" role="button" id="botonzoom" >Siguiente ></a>
  </div>

</div>   
  </div>

  <div class="contenidoOculto" id="oculto" > <!--Inicia seccion oculto -->
  <script type="text/javascript" src="js/js.js"></script>
  <p class="text-justyfi">Los paneles solares o tambien llamados modulos fotovoltaicos son los responsables de captar la radiación proveniente del sol y trasformarla en energia que podemos aprovechar para alimentar nuestros hogares y mucho mas.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                       
  
  <a class="btn rounded-pill btn-block bg-transparent text-center border" role="button" id="botonzoom"     value="mostrar" onclick="ocultar();"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png">Cerrar Información</a>
  

</div> <!--Finaliza seccion oculto -->

@endsection

@section('prueba')
 <script type="text/javascript" src="{{ asset('./js/prueba.js') }}"> </script>
@endsection

@section('scripts')
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
@endsection
