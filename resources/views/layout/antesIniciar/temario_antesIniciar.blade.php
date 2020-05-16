@extends('template.plantilla_alfa')
@section('content')
<div class="titulo">
     <h1 >Preeliminares</h1>
  </div>

  <div class="fichas">

  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
     <center> <h5 class="fas fa-trophy text-center"> 1</h5></center>
      <p class="card-text">Diferentes tecnologias y tipos de controladores asi como la correcta implementación de cada una de ellas    </p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <center><h5 class="fas fa-trophy card-title"> 2</h5></center>
      <p class="card-text">Aprender a leer las caracteristicas y fichas tecnicas de los controladores o reguladores de carga      </p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <center><h5 class="fas fa-trophy card-title"> 3</h5></center>
      <p class="card-text">Aprende todo lo que debes tener en cuenta al momento de elegir un controlador      </p>
    </div>
      </div>
    </div>
    </div>
  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
     <center> <h5 class="fas fa-trophy card-title"> 4</h5></center>
      <p class="card-text">Aprender calculos necesarios para el escoger que regulador usar   </p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <center><h5 class="fas fa-trophy card-title"> 5</h5></center>
      <p class="card-text">Conoce sobre los controladores o reguladores de carga, aprende a determinar cual es el adecuado para el proyecto que necesitas   </p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <center><h5 class="fas fa-trophy card-title"> 6</h5> </center>
      <p class="card-text"> Muchos Otrsos temas interesantes</p>
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
        1. Conceptos Previos </p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('antesIniciar_tema1.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1 Video Introducción </a>
    </li>
    <li><a href="{{asset('antesIniciar_tema1.2') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 Porque energía solar</a></li>
    <li><a href="{{asset('antesIniciar_tema1.3') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 Video Tesla Precursor de AC</a></li> 
  <li><a href="{{asset('antesIniciar_tema1.4') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.4 Tipos de Corriente DC Y AC</a></li>
<li><a href="{{asset('antesIniciar_tema1.5') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.5 nidades de Medida Eléctrica (Voltio Amperio Vatio)</a></li>  
<li><a href="{{asset('antesIniciar_tema1.6') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.6 Componentes Básicos de una solución solar(Panel, controlador, inversor, batería.)</a></li>
<li><a href="{{asset('antesIniciar_tema1.7') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.7 Consumo, carga, alimentación.</a></li> 
<li><a href="{{asset('antesIniciar_tema1.8') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.8 Ley de potencia o ley de watt</a></li> 
<li><a href="{{asset('antesIniciar_tema1.9') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.9 Como calcular de HP  a Watts.</a></li> 
<li><a href="{{asset('antesIniciar_tema1.10') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.10 Términos Técnicos</a></li> 
  </ul> 
  </li>
      </div>
    </div>
<!--Finaliza ultimo SubApartado -->

</div>

@endsection