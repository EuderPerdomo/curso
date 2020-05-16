@extends('template.plantilla_alfa')
@section('content')
<div class="titulo">
     <h1 >Controladores O Reguladores de Carga</h1>
  </div>

  <div class="fichas">

  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy text-center"> Tecnologias </h5>
      <p class="card-text">Diferentes tecnologias y tipos de controladores asi como la correcta implementación de cada una de ellas</p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Instalación</h5>
      <p class="card-text">Aprender a leer las caracteristicas y fichas tecnicas de los controladores o reguladores de carga </p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Caracteristicas</h5>
      <p class="card-text">Aprende todo lo que debes tener en cuenta al momento de elegir un controlador</p>
    </div>
      </div>
    </div>
    </div>
  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">calculos</h5>
      <p class="card-text">Aprender calculos necesarios para el escoger que regulador usar</p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Datos</h5>
      <p class="card-text">Otros Temas Interesantes</p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">!!y Mucho más....¡¡¡</h5>
      <p class="card-text">Atrevete a descubrir muchos otros datos interesantes de la energia solar.</p>
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
  

    <div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        1. Preeliminares</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('controlador_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1 Que es un Controlador o regulador de carga</a>
    </li>
    <li><a href="{{asset('controlador_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 Bloqueo de Corriente Inversa</a></li>
    <li><a href="{{asset('controlador_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 Bombeo de energía desde los paneles hacia las baterías en una sola dirección</a></li>  
  </ul> 
  </li>
      </div>
    </div>

    <div class="subapartado">     
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i> 2. Funciones Y Caracteristicas</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('controlador_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.1 Definir todas las funciones y características</a>
    </li>
      
  </ul> 
  </li>
      </div>
    </div>


<!-- SubApartado 3-->
<div class="subapartado">     
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i> 3. Tipos de Controladores</p>
      </div>

      <div class="info">
  <li>
  <ul class="infor">
    <li>
      <li><a href="{{asset('controlador_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">3.1 MPPT</a>
    </li>
    <li><a href="{{asset('controlador_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">3.2 PWM</a></li>
    <li><a href="{{asset('controlador_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">3.3 PUMP</a></li>
       
  </ul> 
  </li>
      </div>
    </div>

<!-- SubApartado 4-->
<div class="subapartado">     
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i> 4. Conexiones</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('controlador_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">4.1 Esquemas de conexiones de controladores</a>
    </li>
    <li><a href="{{asset('controlador_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">4.2 </a></li>
    <li><a href="{{asset('controlador_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">4.3 </a></li>
        
  </ul> 
  </li>
      </div>
    </div>
<!-- SubApartado 5-->
<div class="subapartado">     
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i> 5. Calculos</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('controlador_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">5.1 Como calcular el controlador que necesito</a>
    </li> 
  </ul> 
  </li>
      </div>
    </div>
<!-- SubApartado 6-->

<div class="subapartado">     
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>6. Practicas</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('controlador_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">6.1 Taller Practico de Controladores</a>
    </li>
     
  </ul> 
  </li>
      </div>
    </div>


</div>

@endsection