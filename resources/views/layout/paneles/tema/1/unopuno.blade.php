@extends('template.plantilla_bravo')

@section('content')
  <div class="title text-center border"> <h1 class="font-weight-bold">Paneles Solares</h1></div>

<div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 2.3%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

   <div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated  bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 2.3%"></div>
</div>


<div class="row  align-items-center text-justyfi">


  
<!--
<div class="col-12 title text-center">
  <button type="button" class="btn  btn-circle border" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
</button>

  <button type="button" class="btn btn-default btn-circle border"><i class="fa fa-check"></i></button>
  <button type="button" class="btn btn-default btn-circle border"><i class="fa fa-check"></i></button>
  <button type="button" class="btn btn-default btn-circle border"><i class="fa fa-check"></i></button>
  <button type="button" class="btn btn-default btn-circle border"><i class="fa fa-check"></i></button>
  <button type="button" class="btn btn-default btn-circle border"><i class="fa fa-check"></i></button>
  <button type="button" class="btn btn-default btn-circle border"><i class="fa fa-check"></i></button>
  <button type="button" class="btn btn-default btn-circle border"><i class="fa fa-check"></i></button>
  <button type="button" class="btn btn-default btn-circle border"><i class="fa fa-check"></i></button>
  <button type="button" class="btn btn-default btn-circle border"><i class="fa fa-check"></i></button>
  <button type="button" class="btn btn-default btn-circle border"><i class="fa fa-check"></i></button>
  <button type="button" class="btn btn-default btn-circle border"><i class="fa fa-check"></i></button>
  <button type="button" class="btn btn-default btn-circle border"><i class="fa fa-check"></i></button>
                          
  </div>
-->

<div class="col-12 col-sm-12 col-md-6 ">
                  <img src="{{asset('img/fondo.jpg') }}" class="img-fluid  " alt="Responsive image">
  <h7>Imagen De referencia, tomada de: <a href="#m">www.link.co</a></h7>
    </div>


    <div class="col-12 col-sm-12 col-md-6 text-justyfi">
      
            <p class="text-justyfi">Los paneles solares o tambien llamados modulos fotovoltaicos son los responsables de captar la radiación proveniente del sol y trasformarla en energia que podemos aprovechar para alimentar nuestros hogares y mucho mas.</p>
            <p>Constan de la unión de varias celulas solares capaces de captar radiación solar y transformarla en corriente continua, al sumar sus capacidades nos brindan la posibilidad de aprovechar una mayor cantidad de energia al instante.</p>
            
  
    </div>


</div>  


   <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-center" role="button" id="botonzoom"     value="mostrar" onClick="muestra_oculta('oculto')"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png">Ampliar Información</a>
  </div> <!--onClick="ostrar();" -->
<div class="row">
  <div class="col-12 col-sm-12 col-md-4 ">
      <a class="btn rounded-pill btn-block bg-success text-center border" role="button" id="botonzoom" href="paneles" >< Anterior</a>
  </div>
  <div class="col-12 col-sm-12 col-md-4 ">
    <a class="btn rounded-pill btn-block bg-success text-center border" role="button" id="botonzoom" href="{{asset('paneles') }}" >Inicio</a>
  </div>
  <div class="col-12 col-sm-12 col-md-4 ">
    <a class="btn rounded-pill btn-block bg-success text-center border" role="button" id="botonzoom" href="{{asset('panel_tema1.2') }}" >Siguiente ></a>
  </div>

</div>

<div class="section" id="oculto" > <!--Inicia seccion oculto -->



<ul>
  <li>Generan energia en corriente continua CC</li>
  <li>Existen diferentes tecnologias, con capacidades variables asi como su uso.</li>
</ul>
            
            <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-center" role="button" id="botonzoom"     value="mostrar" onclick="ocultar();"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png">Cerrar Información</a>
  </div>

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
