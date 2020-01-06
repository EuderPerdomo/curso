@extends('template.plantilla_alfa')

@section('content')

  <div class="section border" >
  <div class="card  ">
    <div class="card-body ">
      <h1 class="text-center font-weight-bold">Conceptos Previos Antes de Iniciar</h1>
      Conoce sobre los controladores o reguladores de carga, aprende a determinar cual es el adecuado para el proyecto que necesitas
    </div>
  </div>
  </div>
  <!-- Seccion de Que aprenderas-->
  <div class="section border">
    <div class="title text-center "> <h1 class="font-weight-bold">Podras Aprender</h1></div>

  <div class="row ">
    <div class="col-6 text-justyfi">
  <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Diferentes tecnologias y tipos de controladores asi como la correcta implementación de cada una de ellas</button>
  </div>         
    </div>


  <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Aprender a leer las caracteristicas y fichas tecnicas de los controladores o reguladores de carga </button>
  </div>         
    </div>


    <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">otros puntos</button>
  </div>         
    </div>

    </div>

  <div class="col-6 text-justyfi">
    
    <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Aprende todo lo que debes tener en cuenta al momento de elegir un controlador</button>
  </div>         
    </div>  

  <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn r btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Aprender calculos necesarios para el escoger que regulador usar</button>
  </div>         
    </div>

    <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Otros Temas Interesantes</button>
  </div>         
    </div>


    </div>

  </div>


  </div>
  <!-- Seccion de Temario-->
  <div class="section border">
    <div class="title text-center border"> <h1 class="font-weight-bold">Contenido de esta Unidad</h1></div>

  <div class="row">
    <div class="col-12 title text-center"> <h1>1</h1><h4>Conceptos Previos</h1></div>
    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('antesIniciar_tema1.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.1</strong> Video Introducción</a>
  </div>         
    </div>
    </div>

  <div class="col-12 col-sm-12 col-md-6  text-justyfi"> 
  <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('antesIniciar_tema1.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.2</strong> Porque energía solar</a>

  </div>         
    </div>

  </div>

  <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('controlador_tema1.3') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.3</strong> Video Tesla Precursor de AC</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('antesIniciar_tema1.4') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.4</strong> Tipos de Corriente DC Y AC</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('antesIniciar_tema1.5') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.5</strong> Unidades de Medida Eléctrica (Voltio Amperio Vatio)</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('antesIniciar_tema1.6') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.6</strong> Componentes Básicos de una solución solar(Panel, controlador, inversor, batería.)</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('antesIniciar_tema1.7') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.7</strong> Consumo, carga, alimentación.</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('antesIniciar_tema1.8') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.8</strong> Ley de potencia o ley de watt</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('antesIniciar_tema1.9') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.9</strong> Como calcular de HP  a Watts.</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('antesIniciar_tema1.10') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.10</strong> Términos Técnicos</a>
  </div>         
    </div>
    </div>

  </div>

  </div>
@endsection