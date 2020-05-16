@extends('template.plantilla_alfa')
@section('content')
<div class="titulo">
     <h1 >Para Fianalizar</h1>
  </div>

  <div class="fichas">

  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy text-center"> ¿Que son?</h5>
      <p class="card-text">     </p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Tecnologias</h5>
      <p class="card-text"> </p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Caracteristicas</h5>
      <p class="card-text">      </p>
    </div>
      </div>
    </div>
    </div>
  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Calculos</h5>
      <p class="card-text">   </p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Datos</h5>
      <p class="card-text">   </p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">!!y Mucho más....¡¡¡</h5>
      <p class="card-text"></p>
    </div>
      </div>
    </div>
    </div>

  </div>

@endsection

@section('dos')
    <div class="titulo">
     <h1 >Contenido de esta Unidad</h1>
  </div>

<div class="contienesub">
  
<!--SubApartado 1 -->
    <div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        1. Ultimos Conceptos</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('paraFinalizar_tema1.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1 Herramientas y tips </a>
    </li>
    <li><a href="{{asset('paraFinalizar_tema1.2') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 Proveedores en Colombia</a></li>
    <li><a href="{{asset('paraFinalizar_tema1.3') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 Como crear Proyecto. (Diseño de un sistema de Energía Solar)</a></li> 
  <li><a href="{{asset('paraFinalizar_tema1.4') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.4 Software PVSYST (Ampliar información de otros software)</a></li>
<li><a href="{{asset('paraFinalizar_tema1.5') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.5 Energías Renovables Solar Térmica</a></li>  
<li><a href="{{asset('paraFinalizar_tema1.6') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.6 Puesta a Tierra</a></li> 
<li><a href="{{asset('paraFinalizar_tema1.7') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.7 Sistemas fotovoltaicos autónomos</a></li> 
<li><a href="{{asset('paraFinalizar_tema1.8') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.8 Mantenimiento de un sistema solar</a></li> 
  </ul> 
  </li>
      </div>
    </div>

 <!--SubApartado 2 -->
   


<!-- SubApartado 3-->
 

<!-- SubApartado 4-->
 
<!-- SubApartado 5-->
 
<!-- SubApartado 6-->

 <!--Finaliza ultimo SubApartado -->


</div>

@endsection