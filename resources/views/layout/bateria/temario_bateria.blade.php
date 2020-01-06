@extends('template.plantilla_alfa')

@section('content')

  <div class="section border" >
  <div class="card  ">
    <div class="card-body ">
      <h1 class="text-center font-weight-bold">Baterías</h1>
     Conoce sobre los distintos tipos de baterias en el mercado, su composicion y funcionaliento, asi como muchos otros temas importantes para el almacenamiento en sistemas solares fotovoltaicos.
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
  <button class="btn btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Diferentes tecnologias y tipos de baterias asi como la correcta implementación de cada una de ellas</button>
  </div>         
    </div>


  <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Aprender a leer las caracteristicas y fichas tecnicas de Baterias </button>
  </div>         
    </div>


    <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Conoce los parametros que se deben tener en cuenta antes de elegir que bateria Utilizar.</button>
  </div>         
    </div>

    </div>

  <div class="col-6 text-justyfi">
    
    <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Aprende a elegir la tension adecuada para el banco de baterias</button>
  </div>         
    </div>  

  <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn r btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Aprender calculos necesarios para la correcta implementación de baterias  y asi evitar cortes indeseados de energia.</button>
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
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema1.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.1</strong> ¿Que son las bateriass?</a>
  </div>         
    </div>
    </div>

     <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema1.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.2</strong> Como funciona una bateria</a>
  </div>         
    </div>
    </div>

  </div>
  <div class="row"><!-- inicia segunda fila para segundo tema -->

    <div class="col-12 title text-center"> <h1>2</h1><h4>Tipos de Baterias</h1></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema2.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.1</strong> AGM GEL</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema2.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.2</strong> GEL</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema2.3') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.3</strong> OPZ</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema2.4') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.4</strong> OPZS</a>
  </div>         
    </div>
    </div>

  </div><!-- FINALIZA segunda fila para segundo tema -->

  <div class="row"><!-- inicia tercera fila para tercer tema -->

    <div class="col-12 title text-center"> <h1>3</h1><h4>Funcionamiento del Banco de baterias</h1></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema3.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.1</strong> Días de autonomia</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema3.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.2</strong> Estándar de vida útil de las baterías respecto a la temperatura</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema3.3') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.3</strong> Mantenimientos</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema3.4') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.4</strong> Consejos duración de baterías</a>
  </div>         
    </div>
    </div>

  </div><!-- FINALIZA tercera fila para tercer tema -->


  <div class="row"><!-- inicia cuarta fila para cuarto tema -->

    <div class="col-12 title text-center"> <h1>4</h1> <h4>Conexiones</h4></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema4.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>4.1</strong> Conexiones en Serie</a>
  </div>         
    </div>
    </div>

<div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema4.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>4.2</strong> Conexiones en paralelo</a>
  </div>         
    </div>
    </div>


  </div><!-- FINALIZA cuarta fila para Cuarto tema -->

  <div class="row"><!-- Inicia quinta fila para 5 tema -->

    <div class="col-12 title text-center"> <h1>5</h1> <h4>Calculos</h4></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema5.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>5.1</strong> Como calcular las baterias necesarias</a>
  </div>         
    </div>
    </div>

  </div><!-- FINALIZA quinta fila para 5 tema -->


  <div class="row"><!-- Inicia sexta fila para 6 tema -->

    <div class="col-12 title text-center"> <h1>6</h1> <h4>Practicas</h4></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('bateria_tema6.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>6.1</strong> Taller practico de Baterías</a>
  </div>         
    </div>
    </div>
  </div><!-- FINALIZA sexta fila para 6 tema -->

  </div>
@endsection