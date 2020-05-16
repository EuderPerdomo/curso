@extends('template.plantilla_alfa')
@section('content')
<div class="titulo">
     <h1 >Calculos</h1>
  </div>

  <div class="fichas">

  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy text-center"> Consumos</h5>
      <p class="card-text">Calcular los consumos basado en los equipos conectados y o en la factura de energía.     </p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">HSP</h5>
      <p class="card-text">Determinar las horas sol pico para el lugar de la instalación     </p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Caracteristicas</h5>
      <p class="card-text">Aprende a calcular paneles, baterias, controladores e Inversores      </p>
    </div>
      </div>
    </div>
    </div>
  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Cableados</h5>
      <p class="card-text">Conoce y calcula los cables autilizar en el proyecto de energia solar</p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Protecciones</h5>
      <p class="card-text">Determina las protecciones necesarias a utilizar para dar seguriodad al sistema.   </p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Puntos de Equilibrio</h5>
      <p class="card-text"> Calcula el punto de equilibrio y taza de retorno del Proyecto que estas implementando</p>
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
        1. !!!!!Vamos a Calcular¡¡¡¡ </p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('calculadora_tema1.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1  Tabla de consumo de algunos electrodomésticos</a>
    </li>
    <li><a href="{{asset('calculadora_tema1.2') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 Calculo de Consumos Mediante potencias</a></li>
    <li><a href="{{asset('calculadora_tema1.3') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 Calculo de Consumos Mediante factura</a></li> 
  <li><a href="{{asset('calculadora_tema1.4') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.4 Calculo de horas sol Pico</a></li>
<li><a href="{{asset('calculadora_tema1.5') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.5 Formulas y Calcular paneles</a></li>  
<li><a href="{{asset('calculadora_tema1.6') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.6 Formulas y Calcular baterías</a></li> 
<li><a href="{{asset('calculadora_tema1.7') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.7 Formulas y Calcular Inversora</a></li> 
<li><a href="{{asset('calculadora_tema1.8') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.8 Formulas y Calcular Controlador o regulador de carga</a></li> 
<li><a href="{{asset('calculadora_tema1.9') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.9 Formulas y Calcular Cables (Ampliar información de tipos de cables)</a></li> 
<li><a href="{{asset('calculadora_tema1.10') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.10 Formulas y Calcular protecciones(Ampliar información de las protecciones)</a></li> 
<li><a href="{{asset('calculadora_tema1.11') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.11 Punto de equilibrio y taza de retorno</a></li> 
  </ul> 
  </li>
      </div>
    </div>

 <!--SubApartado 2 -->
   <div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        2.  Calculadora</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('calculadora_tema2.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.1  Calculadora General</a>
    </li>  
  </ul> 
  </li>
      </div>
    </div>



<!-- SubApartado 3-->
 

<!-- SubApartado 4-->
 
<!-- SubApartado 5-->
 
<!-- SubApartado 6-->

 <!--Finaliza ultimo SubApartado -->


</div>

@endsection