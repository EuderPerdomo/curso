@extends('template.plantilla_alfa')
@section('content')
<div class="titulo">
     <h1 >Normatividad</h1>
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
      <p class="card-text">     </p>
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
        1. Normatividad</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('normatividad_tema1.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1 Creg 030 del 2018 </a>
    </li>
    <li><a href="{{asset('normatividad_tema1.2') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 ley 1715</a></li>
    <li><a href="{{asset('normatividad_tema1.3') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 Retie</a></li> 
  <li><a href="{{asset('normatividad_tema1.4') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.4 Retilap</a></li>
<li><a href="{{asset('normatividad_tema1.5') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.5 </a></li>  
<li><a href="{{asset('normatividad_tema1.6') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.6 </a></li> 
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