@extends('template.plantilla_alfa')
@section('content')
<div class="titulo">
     <h1 >Luminarias Solares</h1>
  </div>

  <div class="fichas">

  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy text-center"> ¿Que son?</h5>
      <p class="card-text">Conoce que son las luminarias solares como alternativa en alumbrado publico y otars aplicaciones</p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Tecnologias</h5>
      <p class="card-text">Tecnologias de funcionamiento de las luminarias soalres</p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Caracteristicas</h5>
      <p class="card-text">Aprender sobre las caracteristicas y fichas tecnicas y sorprendete con su funcionamiento</p>
    </div>
      </div>
    </div>
    </div>
  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Calculos</h5>
      <p class="card-text">Conoce como puedes realizar los calculos para sistemas de alumbrado publico</p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Datos</h5>
      <p class="card-text">Conoce que luminarias elegir acorde a el proyecto por implementar</p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">!!y Mucho más....¡¡¡</h5>
      <p class="card-text">Sorprendete con su facil instalación y funcionaiento.</p>
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
        1. Conociendo las luminarias Solares</p>
      </div>

      <div class="info">
  <li>
  <ul class="infor">
    <li>
      <li><a href="{{asset('luminaria_tema1.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1 Estructura </a>
    </li>
    <li><a href="{{asset('luminaria_tema1.2') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 Composición</a></li>
    <li><a href="{{asset('luminaria_tema1.3') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 Funcionamiento</a></li>
    <li><a href="{{asset('luminaria_tema1.4') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.4 Tipos de luminarias</a></li>
    <li><a href="{{asset('luminaria_tema1.5') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.5 Montaje</a></li>
    <li><a href="{{asset('luminaria_tema1.6') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.6 Mantenimiento</a></li>
  </ul> 
  </li>
      </div>
    </div>
</div>

@endsection