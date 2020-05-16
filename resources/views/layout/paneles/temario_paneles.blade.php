@extends('template.plantilla_alfa')
@section('content')
<div class="titulo">
     <h1 >Paneles</h1>
  </div>

  <div class="fichas">

  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy text-center"> Tecnologias</h5>
      <p class="card-text">Conoce sobre las diferentes y principales tecnologias del mercado actual</p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Datos</h5>
      <p class="card-text">Conoce Como funcióna la radiación, y la influencia de los factores ambientales  </p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Instalación</h5>
      <p class="card-text">Aprende todo lo que debes tener en cuenta al momento de realizar una instalación de modulos Fotovoltaicos</p>
    </div>
      </div>
    </div>
    </div>
  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Caracteristicas</h5>
      <p class="card-text">Conoce como leer fichas tecnicas y entender las caracteristicas de los paneles solares   </p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">calculos</h5>
      <p class="card-text">Aprende a dimensionar pequeños y medianos sistemas solares   </p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">!!y Mucho más....¡¡¡</h5>
      <p class="card-text">Atrevete a descubrir muchos otros datos interesantes de la energia soalar.</p>
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
        1. Preeliminares</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('panel_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1 Definición de un panel solar</a>
    </li>
    <li><a href="{{asset('panel_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 Composicion de un panel solar</a></li>
    <li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 Paneles solares Monocristalinos</a></li> 
  <li><a href="{{asset('panel_tema1.4')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.4 Paneles solares Policristalinos</a></li>
<li><a href="{{asset('panel_tema1.5')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.5 ¿Que es mejor, cual deberia elegir?</a></li>  
<li><a href="{{asset('panel_tema1.6')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.6 Como Instalar un panel solar</a></li> 
<li><a href="{{asset('panel_tema1.7')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.7 Orientación Geografica</a></li>
<li><a href="{{asset('panel_tema1.8')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.8 Definición Retie, Retilap</a></li>
<li><a href="{{asset('panel_tema1.9')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.9 Constitución de una célula solar</a></li>
<li><a href="{{asset('panel_tema1.10')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.10 Efecto  fotovoltaico</a></li>
<li><a href="{{asset('panel_tema1.11')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.11 Semiconductores P Y N</a></li>
<li><a href="{{asset('panel_tema1.12')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.12 Célula Solar</a></li>




  </ul> 
  </li>
      </div>
    </div>

 <!--SubApartado 2 -->
   <div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        2.Criterios para Conocer la Calidad de un panel</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('panel_tema2.1')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.1  </a>
    </li>
    <li><a href="{{asset('panel_tema2.2')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.2 </a></li>
    <li><a href="{{asset('panel_tema2.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.3 </a></li> 
  <li><a href="{{asset('panel_tema2.4')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.4 </a></li>
<li><a href="{{asset('panel_tema2.5')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.5 </a></li>  
<li><a href="{{asset('panel_tema2.6')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.6 </a></li> 
<li><a href="{{asset('panel_tema2.7')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.7 </a></li>
<li><a href="{{asset('panel_tema2.8')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.8 </a></li>
  </ul> 
  </li>
      </div>
    </div>


<!-- SubApartado 3-->
  <div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        3. Principales Cerificaciones</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('panel_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1  </a>
    </li>
    <li><a href="{{asset('panel_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 </a></li>
    <li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 </a></li> 
  <li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.4 </a></li>
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.5 </a></li>  
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.6 </a></li> 
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.7 </a></li>
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.8 </a></li>
  </ul> 
  </li>
      </div>
    </div>

<!-- SubApartado 4-->
  <div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        4. Estandares más comunes de panales solares</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('panel_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1  </a>
    </li>
    <li><a href="{{asset('panel_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 </a></li>
    <li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 </a></li> 
  <li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.4 </a></li>
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.5 </a></li>  
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.6 </a></li> 
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.7 </a></li>
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.8 </a></li>
  </ul> 
  </li>
      </div>
    </div>
<!-- SubApartado 5-->
 <div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        5. Como leer la ficha tecnica de un panel solar</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('panel_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1  </a>
    </li>
    <li><a href="{{asset('panel_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 </a></li>
    <li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 </a></li> 
  <li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.4 </a></li>
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.5 </a></li>  
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.6 </a></li> 
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.7 </a></li>
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.8 </a></li>
  </ul> 
  </li>
      </div>
    </div>
<!-- SubApartado 6-->

<div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        6. La radiación Solar</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('panel_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1  </a>
    </li>
    <li><a href="{{asset('panel_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 </a></li>
    <li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 </a></li> 
  <li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.4 </a></li>
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.5 </a></li>  
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.6 </a></li> 
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.7 </a></li>
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.8 </a></li>
  </ul> 
  </li>
      </div>
    </div> 

    <!-- SubApartado 7-->

<div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        7. Conexiones</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('panel_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1  </a>
    </li>
    <li><a href="{{asset('panel_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 </a></li>
    <li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 </a></li> 
  <li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.4 </a></li>
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.5 </a></li>  
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.6 </a></li> 
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.7 </a></li>
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.8 </a></li>
  </ul> 
  </li>
      </div>
    </div> 

    <!-- SubApartado 8-->

<div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        8. Calculos</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('panel_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1  </a>
    </li>
    <li><a href="{{asset('panel_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 </a></li>
    <li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.3 </a></li> 
  <li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.4 </a></li>
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.5 </a></li>  
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.6 </a></li> 
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.7 </a></li>
<li><a href="{{asset('panel_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.8 </a></li>
  </ul> 
  </li>
      </div>
    </div> <!--Finaliza ultimo SubApartado -->


</div>

@endsection