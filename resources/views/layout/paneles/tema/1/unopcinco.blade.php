@extends('template.plantilla_bravo')

@section('content')
  <div class="title text-center border"> <h1 class="font-weight-bold">¿Que es mejor Monocristalino o Policristalino? ¿Cual Elegir?</h1></div>

 <div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated  bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 6.9%"></div>
</div>
<div class="row  align-items-center text-justyfi">

<div class="col-12 col-sm-12 col-md-6 ">
                  <img src="{{asset('img/fondo.jpg') }}" class="img-fluid  " alt="Responsive image">
  <h7>Imagen De referencia, tomada de: <a href="#m">www.link.co</a></h7>
    </div>


    <div class="col-12 col-sm-12 col-md-6 text-justyfi">
      
            <p class="text-justyfi">Al momento de elegir entre cual de las dos principales tecnologias en el mercado elegir pueden influir varios factores ya sean gusto por uno u otro debido a origees o producion del mismo, u otros factores mas importantes como lo puede ser el espacio disponible para realizar la instalación, si se cueta con poco espacio se recomienda usar paneles Monocristalinos ya que al contar con una mayor eficiencia se reduce el espacio necesario para producir una determinada cantidad de energia, por el contrario si se cuenta con un area bastante extensa e podria elegir paneles policristalinos.<br>
            Otro factor Importante a tener en cuenta es la temperatura, generalmente los paneles policristalinos tienden a ser mas eficientes y mas tolerantes a altas temperaturas. </p>
           
    </div>

</div>  
   <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-center" role="button" id="botonzoom"     value="mostrar" onClick="muestra_oculta('oculto')"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png">Ampliar Información</a>
  </div> <!--onClick="ostrar();" -->
<div class="row">
  <div class="col-12 col-sm-12 col-md-4 ">
      <a class="btn rounded-pill btn-block bg-success text-center border" role="button" id="botonzoom" href="{{asset('panel_tema1.4') }}">< Anterior</a>
  </div>
  <div class="col-12 col-sm-12 col-md-4 ">
    <a class="btn rounded-pill btn-block bg-success text-center border" role="button" id="botonzoom" href="{{asset('paneles') }}">Inicio</a>
  </div>
  <div class="col-12 col-sm-12 col-md-4 ">
    <a class="btn rounded-pill btn-block bg-success text-center border" role="button" id="botonzoom" href="{{asset('panel_tema1.6') }}">Siguiente ></a>
  </div>

</div>

<div class="section" id="oculto" > <!--Inicia seccion oculto -->


  <p class="text-justyfi">Tener en cuenta los factores de espacio y temperatura ayudaran a elegir mejor los paneles solares a utilizar y por consiguiente conseguir un mejor redimiento de nuestro sistema.</p>
            
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
