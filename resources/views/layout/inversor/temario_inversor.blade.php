@extends('template.plantilla_alfa')
@section('content')
<div class="titulo">
     <h1 >Inversores Solares</h1>
  </div>

  <div class="fichas">

  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy text-center"> ¿Que son?</h5>
      <p class="card-text">Conoce sobre los inversores, conoce los diferentes tipos que existen asi como aprende a determinar cual es el adecuado para la solución que quieres Implementar</p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Tecnologias</h5>
      <p class="card-text">Diferentes tecnologias y tipos de inversores asi como la correcta implementación de cada una de ellas</p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Caracteristicas</h5>
      <p class="card-text">Aprender a leer las caracteristicas y fichas tecnicas de los inversores</p>
    </div>
      </div>
    </div>
    </div>
  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Calculos</h5>
      <p class="card-text">Aprender calculos necesarios para el escoger que Inversor usar y no desperdiciar o quedar fuera de capacidad.</p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Datos</h5>
      <p class="card-text">ficahas tecnicas, tecnologias y mucho mas</p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">!!y Mucho más....¡¡¡</h5>
      <p class="card-text">Atrevete a descubrir muchos otros datos interesantes de los Inversores Soalares</p>
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
      <li><a href="{{asset('inversor_tema1.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1  ¿Que son los Inversores?</a>
    </li>
    <li><a href="{{asset('controlador_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 B</a></li>
    <li><a href="{{asset('controlador_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 </a></li> 
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
      <li><a href="{{asset('inversor_tema2.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.1 Inversor de onda modificada</a>
    </li>
    <li><a href="{{asset('inversor_tema2.2') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.2 Inversores de Onda Pura</a></li>
    <li><a href="{{asset('inversor_tema2.3') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.3 Inversores Hibridos</a></li>
      <li><a href="{{asset('inversor_tema2.4') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.4 Inversores ON GRID</a></li>
       <li><a href="{{asset('inversor_tema2.5') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.5 Inversores OFF GRID</a></li>
        <li><a href="{{asset('inversor_tema2.6') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.6 Sistemas PUMP</a></li>
         <li><a href="{{asset('inversor_tema2.7') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.7 Sistemas TIE</a></li>
          <li><a href="{{asset('inversor_tema2.8') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.8 Micro Inversores</a></li>
           <li><a href="{{asset('inversor_tema2.9') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.9 Inversor de onda modificada</a></li>
            <li><a href="{{asset('inversor_tema2.10') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.10 Como funciona un microinversor (Incluir Video)</a></li>
  </ul> 
  </li>
      </div>
    </div>


<!-- SubApartado 3-->
<div class="subapartado">     
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i> 3. Puntos a tener en cuenta al elegir un Inversor</p>
      </div>

      <div class="info">
  <li>
  <ul class="infor">
    <li>
      <li><a href="{{asset('inversor_tema3.1') }}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">3.1 Potencia</a>
    </li>
    <li><a href="{{asset('inversor_tema3.2') }}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">3.2 Pico Máximo</a></li>
    <li><a href="{{asset('inversor_tema3.3') }}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">3.3 Voltaje de entrada y salida</a></li>
    <li><a href="{{asset('inversor_tema3.4') }}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">3.4 Tipo de Onda(Pura o Modificada) </a></li>
    <li><a href="{{asset('inversor_tema3.5') }}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">3.5 Potencia Pico o Arranque</a></li>
    <li><a href="{{asset('inversor_tema3.6') }}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">3.6 Protecciones</a></li>    
  </ul> 
  </li>
      </div>
    </div>

<!-- SubApartado 4-->
<div class="subapartado">     
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i> 4. Instalación y Mantenimientos</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('inversor_tema4.1') }}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">4.1 Puesta en marcha del Inversor </a>
    </li>
    <li><a href="{{asset('inversor_tema4.2') }}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">4.2 Mantenimientos</a></li>    
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
      <li><a href="{{asset('inversor_tema5.1') }}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">5.1 Como calcular el inversor que necesito</a>
    </li>   
  </ul> 
  </li>
      </div>
    </div>
<!-- SubApartado 6-->

<div class="subapartado">     
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i> 6. Practicas</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('inversor_tema6.1') }}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">6.1 Taller practico de Inversores</a>
    </li>
      
  </ul> 
  </li>
      </div>
    </div>


</div>

@endsection