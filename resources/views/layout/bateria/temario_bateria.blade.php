@extends('template.plantilla_alfa')
@section('content')
<div class="titulo">
     <h1 >Baterias</h1>
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
      <p class="card-text">Diferentes tecnologias y tipos de baterias asi como la correcta implementación de cada una de ellas     </p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Caracteristicas</h5>
      <p class="card-text">Aprender a leer las caracteristicas y fichas tecnicas de Baterias      </p>
    </div>
      </div>
    </div>
    </div>
  <div class="row">
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Calculos</h5>
      <p class="card-text">Aprender calculos necesarios para la correcta implementación de baterias  y asi evitar cortes indeseados de energia. </p>
    </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">Datos</h5>
      <p class="card-text">Aprende a elegir la tension adecuada para el banco de baterias   </p>
    </div>
      </div>
    </div>
    <div class="col-md-4">
  <div class="card bg-transparent">
      <div class="card-body text-white">
      <h5 class="fas fa-trophy card-title">!!y Mucho más....¡¡¡</h5>
      <p class="card-text">Conoce los parametros que se deben tener en cuenta antes de elegir que bateria Utilizar.</p>
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
      <li><a href="{{asset('bateria_tema1.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.1 ¿Que son las bateriass? </a>
    </li>
    <li><a href="{{asset('bateria_tema1.2') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">1.2 Como funciona una bateria para enrgia solar</a></li>
  </ul> 
  </li>
      </div>
    </div>

 <!--SubApartado 2 -->
    <div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        2. Tipos de Baterias</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('bateria_tema2.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.1 AGM GEL</a>
    </li>
    <li><a href="{{asset('bateria_tema2.2') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.2 GEL</a></li>
    <li><a href="{{asset('bateria_tema2.3') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.3 OPZ</a></li> 
  <li><a href="{{asset('bateria_tema2.4') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.4 OPZS</a></li>
<li><a href="{{asset('bateria_tema2.5') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.5 </a></li>  
<li><a href="{{asset('bateria_tema2.6') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">2.6 </a></li> 
  </ul> 
  </li>
      </div>
    </div>

<!-- SubApartado 3-->
  <div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        3. Funcionamiento del Banco de baterias</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('bateria_tema3.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">3.1 Días de autonomia</a>
    </li>
    <li><a href="{{asset('bateria_tema3.2') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">3.2 Estándar de vida útil de las baterías respecto a la temperatura</a></li>
    <li><a href="{{asset('bateria_tema3.3') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">3.3 Mantenimientos</a></li> 
  <li><a href="{{asset('bateria_tema3.4') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">3.4Consejos duración de baterías</a></li>
<li><a href="{{asset('bateria_tema3.5') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">3.5 </a></li>  
<li><a href="{{asset('bateria_tema3.6') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">3.6 </a></li> 
  </ul> 
  </li>
      </div>
    </div>

<!-- SubApartado 4-->
   <div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        4. Conexiones</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('bateria_tema4.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">4.1 Conexiones en Serie</a>
    </li>
    <li><a href="{{asset('bateria_tema4.2') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">4.2 Conexiones en paralelo</a></li>
    <li><a href="{{asset('bateria_tema4.3') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">4.3 </a></li> 
  <li><a href="{{asset('bateria_tema4.4') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">4.4 </a></li>
<li><a href="{{asset('bateria_tema4.5') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">4.5 </a></li>  
<li><a href="{{asset('bateria_tema4.6') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">4.6 </a></li> 
  </ul> 
  </li>
      </div>
    </div>
<!-- SubApartado 5-->
  <div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
       5. Calculos</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('bateria_tema5.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">5.1 Como calcular las baterias necesarias</a>
    </li>
    <li><a href="{{asset('bateria_tema5.2') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">5.2 </a></li>
    <li><a href="{{asset('bateria_tema5.3') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">5.3 </a></li> 
  <li><a href="{{asset('bateria_tema5.4') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">5.4 </a></li>
<li><a href="{{asset('bateria_tema5.5') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">5.5 </a></li>  
<li><a href="{{asset('bateria_tema5.6') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">5.6 </a></li> 
  </ul> 
  </li>
      </div>
    </div>
<!-- SubApartado 6-->

 <div class="subapartado">      
      <div class="titul">
        <p class="titul"><i class="fas fa-chevron-down"></i>
        6. Practicas</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('bateria_tema6.1') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">6.1 Taller practico de Baterías </a>
    </li>
    <li><a href="{{asset('bateria_tema6.2') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">6.2 </a></li>
    <li><a href="{{asset('bateria_tema6.3') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">6.3 </a></li> 
  <li><a href="{{asset('bateria_tema6.4') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">6.4 </a></li>
<li><a href="{{asset('bateria_tema6.5') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">6.5 </a></li>  
<li><a href="{{asset('bateria_tema6.6') }}" class="btn bg-transparent btn-lg active btn-block text-left btn-sm" role="button" aria-pressed="true">6.6 </a></li> 
  </ul> 
  </li>
      </div>
    </div> <!--Finaliza ultimo SubApartado -->


</div>

@endsection