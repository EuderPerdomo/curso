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
      <li><a href="{{asset('controlador_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.1 Que es un Controlador o regulador de carga</a>
    </li>
    <li><a href="{{asset('controlador_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.2 Bloqueo de Corriente Inversa</a></li>
    <li><a href="{{asset('controlador_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.3 Bombeo de energía desde los paneles hacia las baterías en una sola dirección</a></li>
    <li><a href="">4</a></li>
    <li><a href="">5</a></li>
    <li><a href="">6</a></li>
    <li><a href="">7</a></li>
    <li><a href="">8</a></li>
    <li><a href="">9</a></li>
    <li><a href="">10</a></li>
    <li><a href="">11</a></li>
    
  </ul> 
  </li>
      </div>
    </div>

    <div class="subapartado">     
      <div class="titul">
        <p class="titul">2. Tema dos</p>
      </div>

      <div class="info">
  <li>
  
  <ul class="infor">
    <li>
      <li><a href="{{asset('controlador_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.1 Que es un Controlador o regulador de carga</a>
    </li>
    <li><a href="{{asset('controlador_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.2 Bloqueo de Corriente Inversa</a></li>
    <li><a href="{{asset('controlador_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.3 Bombeo de energía desde los paneles hacia las baterías en una sola dirección</a></li>
    <li><a href="">4</a></li>
    <li><a href="">5</a></li>
    <li><a href="">6</a></li>
    <li><a href="">7</a></li>
    <li><a href="">8</a></li>
    <li><a href="">9</a></li>
    <li><a href="">10</a></li>
    <li><a href="">11</a></li>    
  </ul> 
  </li>
      </div>
    </div>



</div>
<!--
<ul class="miclase">
  <li>
 <button class="boton btn bg-transparent btn-lg active btn-block text-left border" role="button" aria-pressed="true"> preeliminares</button>
   
    <p><a class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">hola</a></p>
  <p class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">Preeliminares</p>

</li>
  <ul class="infor">
    <li>
      <li><a href="{{asset('controlador_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.1 Que es un Controlador o regulador de carga</a>
    </li>
    <li><a href="{{asset('controlador_tema1.2')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.2 Bloqueo de Corriente Inversa</a></li>
    <li><a href="{{asset('controlador_tema1.3')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.3 Bombeo de energía desde los paneles hacia las baterías en una sola dirección</a></li>
    <li><a href="">4</a></li>
    <li><a href="">5</a></li>
    <li><a href="">6</a></li>
    <li><a href="">7</a></li>
    <li><a href="">8</a></li>
    <li><a href="">9</a></li>
    <li><a href="">10</a></li>
    <li><a href="">11</a></li>
    
  </ul> 
  </li>



<li>
  <a href="#" class="btn bg-transparent btn-lg active btn-block text-left border" role="button" aria-pressed="true">2.Segundo Tema</a>
  <ul class="infor">
    <li>
      <li><a href="{{asset('controlador_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.1 Que es un Controlador o regulador de carga</a>
    </li>
    
  </ul> 
  </li>


<li>
  <a href="#" class="btn bg-transparent btn-lg active btn-block text-left border" role="button" aria-pressed="true">1 .Preeliminares</a>
  <ul class="infor">
    <li>
      <li><a href="{{asset('controlador_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.1 Que es un Controlador o regulador de carga</a>
    </li>
    <li><a href="">2</a></li>
    <li><a href="">3</a></li>
    <li><a href="">4</a></li>
    <li><a href="">5</a></li>
    <li><a href="">6</a></li>
    <li><a href="">7</a></li>
    <li><a href="">8</a></li>
    <li><a href="">9</a></li>
    <li><a href="">10</a></li>
    <li><a href="">11</a></li>
    
  </ul> 
  </li>




</ul>

-->
<!--
  <div class="botones">
<ul class="acorh">
  <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left border" role="button" aria-pressed="true">1 .Preeliminares</a>
    <ul>
      <li><a href="{{asset('controlador_tema1.1')}}" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.1 Que es un Controlador o regulador de carga</a>
         <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.2 Bloqueo de Corriente Inversa</a>
      <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">1.3 Bombeo de energía desde los paneles hacia las baterías en una sola dirección</a>
    </ul>
  </li>

  <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">2 .Funciones Y Caracteristicas</a>
    <ul>
      <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">2.1 Definir todas las funciones y características</a>
      <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">2.2</a>
      <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">2.3</a>
    </ul>
  </li>

  <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">3 .Tipos de Controladores</a>
    <ul>
      <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">3.1 MPPT</a>
      <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">3.2 PWM</a>
    </ul>
  </li>

<li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">4.  Conexiones</a>
    <ul>
      <a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">4.1 Esquemas de conexiones de controladores</a>
      <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">4.2</a>
    </ul>
  </li>


  <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">5. Calculos</a>
    <ul>
      <a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">5.1 Como calcular el controlador que necesito</a>
      <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">5.2</a>
    </ul>
  </li>


  <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">6.   Practicas</a>
    <ul>
      <a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">6.1 Taller practico de Controladores</a>
      <li><a href="#" class="btn bg-transparent btn-lg active btn-block text-left" role="button" aria-pressed="true">6.2</a>
    </ul>
  </li>

</ul>


  </div> -->




@endsection