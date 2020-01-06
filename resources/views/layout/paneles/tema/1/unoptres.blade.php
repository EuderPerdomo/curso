@extends('template.plantilla_bravo')

@section('content')
  <div class="title text-center border"> <h1 class="font-weight-bold">Paneles Solares Monocristalinos</h1></div>

 <div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated  bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 6.9%"></div>
</div>
<div class="row  align-items-center text-justyfi">

<div class="col-12 col-sm-12 col-md-6 ">
                  <img src="{{asset('img/fondo.jpg') }}" class="img-fluid  " alt="Responsive image">
  <h7>Imagen De referencia, tomada de: <a href="#m">www.link.co</a></h7>
    </div>


    <div class="col-12 col-sm-12 col-md-6 text-justyfi">
      
            <p class="text-justyfi">Son una de las tecnologias de paneles solares, en estos las celulas de silicio se cortan con bordes redondeados lo cual le dan su estructura caracteristica, ademas poseen un rendimiento mas elevado. </p>
           
            
  
    </div>


</div>  
   <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-center" role="button" id="botonzoom"     value="mostrar" onClick="muestra_oculta('oculto')"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png">Ampliar Información</a>
  </div> <!--onClick="ostrar();" -->
<div class="row">
  <div class="col-12 col-sm-12 col-md-4 ">
      <a class="btn rounded-pill btn-block bg-success text-center border" role="button" id="botonzoom" href="{{asset('panel_tema1.2') }}">< Anterior</a>
  </div>
  <div class="col-12 col-sm-12 col-md-4 ">
    <a class="btn rounded-pill btn-block bg-success text-center border" role="button" id="botonzoom" href="{{asset('paneles') }}">Inicio</a>
  </div>
  <div class="col-12 col-sm-12 col-md-4 ">
    <a class="btn rounded-pill btn-block bg-success text-center border" role="button" id="botonzoom" href="{{asset('panel_tema1.4') }}">Siguiente ></a>
  </div>

</div>

<div class="section" id="oculto" > <!--Inicia seccion oculto -->

  <p class="text-justyfi">Otras tecnologias que se pueden encontrar en el mercado son los paneles De silicio Amorfo</p>
            
            <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-center" role="button" id="botonzoom"     value="mostrar" onclick="ocultar();"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png">Cerrar Información</a>
  </div>

</div> <!--Finaliza seccion oculto -->
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
