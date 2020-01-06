@extends('template.plantilla_alfa')

@section('content')

  <div class="section border" >
  <div class="card  ">
    <div class="card-body ">
      <h1 class="text-center font-weight-bold">Inversores</h1>
      Conoce sobre los inversores, conoce los diferentes tipos que existen asi como aprene a determinar cual es el adecuado para la solución que quieres Implementar
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
  <button class="btn btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Diferentes tecnologias y tipos de inversores asi como la correcta implementación de cada una de ellas</button>
  </div>         
    </div>


  <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Aprender a leer las caracteristicas y fichas tecnicas de los inversores </button>
  </div>         
    </div>


    <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Conoce los parametros que se deben tener en cuenta antes de elegir que Inversor solar utilizar.</button>
  </div>         
    </div>

    </div>

  <div class="col-6 text-justyfi">
    
    <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Aprende todo lo que debes tener en cuenta al momento de elegir un Inversor</button>
  </div>         
    </div>  

  <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn r btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Aprender calculos necesarios para el escoger que Inversor usar y no desperdiciar o quedar fuera de capacidad.</button>
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
    <div class="col-12 title text-center"> <h1>1</h1><h4>Preeliminares</h1></div>
    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema1.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.1</strong> ¿Que son los Inversores?</a>
  </div>         
    </div>
    </div>

  </div>
  <div class="row"><!-- inicia segunda fila para segundo tema -->

    <div class="col-12 title text-center"> <h1>2</h1><h4>Funciones Y Caracteristicas</h1></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema2.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.1</strong> Inversor de onda modificada</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema2.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.2</strong> Inversores de Onda Pura</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema2.3') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.3</strong> Inversores Hibridos</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema2.4') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.4</strong> Inversores ON GRID</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema2.5') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.5</strong> Inversores OFF GRID</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema2.6') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.6</strong> Sistemas PUMP</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema2.7') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.7</strong> Sistemas TIE</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema2.8') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.8</strong> Micro Inversores</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema2.9') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.9</strong> Inversor de onda modificada</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema2.10') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.10</strong> Como funciona un microinversor (Incluir Video)</a>
  </div>         
    </div>
    </div>


  </div><!-- FINALIZA segunda fila para segundo tema -->

  <div class="row"><!-- inicia tercera fila para tercer tema -->

    <div class="col-12 title text-center"> <h1>3</h1><h4>Puntos a tener en cuenta al elegir un Inversor</h1></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema3.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.1</strong> Potencia</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema3.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.2</strong> Pico Máximo</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema3.3') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.3</strong> Voltaje de entrada y salida</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema3.4') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.4</strong> Tipo de Onda(Pura o Modificada)</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema3.5') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.5</strong> Potencia Pico o Arranque</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema3.6') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.6</strong> Protecciones</a>
  </div>         
    </div>
    </div>

  </div><!-- FINALIZA tercera fila para tercer tema -->


  <div class="row"><!-- inicia cuarta fila para cuarto tema -->

    <div class="col-12 title text-center"> <h1>4</h1> <h4>Instalación y Mantenimientos</h4></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema4.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>4.1</strong> Puesta en marcha del Inversor</a>
  </div>         
    </div>
    </div>

<div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema4.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>4.2</strong> Mantenimientos</a>
  </div>         
    </div>
    </div>


  </div><!-- FINALIZA cuarta fila para Cuarto tema -->

  <div class="row"><!-- Inicia quinta fila para 5 tema -->

    <div class="col-12 title text-center"> <h1>5</h1> <h4>Calculos</h4></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema5.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>5.1</strong> Como calcular el inversor que necesito</a>
  </div>         
    </div>
    </div>

  </div><!-- FINALIZA quinta fila para 5 tema -->


  <div class="row"><!-- Inicia sexta fila para 6 tema -->

    <div class="col-12 title text-center"> <h1>6</h1> <h4>Practicas</h4></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('inversor_tema6.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>6.1</strong> Taller practico de Inversores</a>
  </div>         
    </div>
    </div>
  </div><!-- FINALIZA sexta fila para 6 tema -->

  </div>
@endsection