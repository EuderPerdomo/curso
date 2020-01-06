@extends('template.plantilla_bravo')

@section('content')
  <div class="title text-center border"> <h1 class="font-weight-bold">Composisión de un panel Solar</h1></div>

 <div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated  bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 4.6%"></div>
</div>

<div class="container-fluid">
  <div class="row  align-items-center text-justyfi border">
 
<div class="col-12 col-sm-12 col-md-6 ">
                  <img src="{{asset('img/fondo.jpg') }}" class="img-fluid  " alt="Responsive image">
  <h7>Imagen De referencia, tomada de: <a href="#m">www.link.co</a></h7>
    </div>


    <div class=" col-12 col-sm-12 col-md-6 text-justyfi overflow-auto" style="width: 100px; height: 400px;">
      
            <p class="text-justyfi">Los paneles solares se componen de la union de varias celulas unidasmediante conexiones series y paralelas para asi conseguir una determinada potencia.
            El silicio es el material mas usado actualmente para la fabricación de celulas solares debido a sus propiedades tanto fisicas como quimicas lo cual lo hacen un excelente semiconductor para propiciar el efecto fotovoltaico. Adicional a el silicio se utilizan otros elementos como lo son arseniuro u otros elementos con el fin de conseguir mejores capacidades.</p>
            <p class="text-justyfi">Adicionalmente  un panel solar se compone de: <br>
              <strong>Marco:</strong>Este puede ser metalico, generalmente de aluminio o plastico.<br>
              <strong>Polimero :</strong> El cual es usado en la cara posterior del panel y permite sostener y unir las celulas solares<br>
              <strong>Cables:</strong>Mediante los cuales se da la salida final del panel y permite la conexion con otros modulos.<br>
              <strong>Diodos De Bypas:</strong> Estos diodos ayudan a minimizar perdidas de energia generada por el panel solar.<br>
              



            </p>       
    </div>

</div>  <!--Finaliza Row -->
</div>


   <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-center" role="button" id="botonzoom"     value="mostrar" onClick="muestra_oculta('oculto')"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png">Ampliar Información</a>
  </div> <!--onClick="ostrar();" -->
<div class="row">
  <div class="col-12 col-sm-12 col-md-4 ">
      <a class="btn rounded-pill btn-block bg-success text-center border" role="button" id="botonzoom" href="{{asset('panel_tema1.1') }}">< Anterior</a>
  </div>
  <div class="col-12 col-sm-12 col-md-4 ">
    <a class="btn rounded-pill btn-block bg-success text-center border" role="button" id="botonzoom" href="{{asset('paneles') }}">Inicio</a>
  </div>
  <div class="col-12 col-sm-12 col-md-4 ">
    <a class="btn rounded-pill btn-block bg-success text-center border" role="button" id="botonzoom" href="{{asset('panel_tema1.3') }}">Siguiente ></a>
  </div>

</div>

<div class="section" id="oculto" > <!--Inicia seccion oculto -->


  <p class="text-justyfi"><strong>Silicio (SI)</strong> Elemento quimico con numero atómico 14, perteneciente al grupo IV A de la tabla periodica.</p>
            
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
