@extends('template.plantilla_alfa')

@section('content')

  <div class="section border" >
  <div class="card  ">
    <div class="card-body ">
      <h1 class="text-center font-weight-bold">Calculos</h1>
     Aprende todos los calculos necesarios para realizar la implementación de un sistema solar
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
  <button class="btn btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Calcular los consumos basado en los equipos conectados y o en la factura de energía.</button>
  </div>         
    </div>


  <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Determinar las horas sol pico para el lugar de la instalación </button>
  </div>         
    </div>


    <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Aprende a calcular paneles, baterias, controladores e Inversores</button>
  </div>         
    </div>

    </div>

  <div class="col-6 text-justyfi">
    
    <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Conoce y calcula los cables autilizar en el proyecto de energia solar</button>
  </div>         
    </div>  

  <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn r btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Determina las protecciones necesarias a utilizar para dar seguriodad al sistema.</button>
  </div>         
    </div>

    <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/wired/40/000000/control-panel.png">Calcula el punto de equilibrio y taza de retorno del Proyecto que estas implementando</button>
  </div>         
    </div>


    </div>

  </div>


  </div>
  <!-- Seccion de Temario-->
  <div class="section border">
    <div class="title text-center border"> <h1 class="font-weight-bold">Contenido de esta Unidad</h1></div>

  <div class="row">
    <div class="col-12 title text-center"> <h1>1</h1><h4>!!!!!Vamos a Calcular¡¡¡¡</h1></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('calculadora_tema1.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.1</strong> Tabla de consumo de algunos electrodomésticos
</a>
  </div>         
    </div>
    </div>

     <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('calculadora_tema1.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.2</strong> Calculo de Consumos Mediante potencias</a>
  </div>         
    </div>
    </div>

     <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('calculadora_tema1.3') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.3</strong> Calculo de Consumos Mediante factura
</a>
  </div>         
    </div>
    </div>

     <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('calculadora_tema1.4') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.4</strong> Calculo de horas sol Pico</a>
  </div>         
    </div>
    </div>


 <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('calculadora_tema1.5') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.5</strong> Formulas y Calcular paneles</a>
  </div>         
    </div>
    </div>

     <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('calculadora_tema1.6') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.6</strong> Formulas y Calcular baterías</a>
  </div>         
    </div>
    </div>


 <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('calculadora_tema1.7') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.7</strong> Formulas y Calcular Inversora</a>
  </div>         
    </div>
    </div>

     <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('calculadora_tema1.8') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.8</strong> Formulas y Calcular Controlador o regulador de carga</a>
  </div>         
    </div>
    </div>


 <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('calculadora_tema1.9') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.9</strong> Formulas y Calcular Cables (Ampliar información de tipos de cables)</a>
  </div>         
    </div>
    </div>

     <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('calculadora_tema1.10') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.10</strong> Formulas y Calcular protecciones(Ampliar información de las protecciones)</a>
  </div>         
    </div>
    </div>


 <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('calculadora_tema1.11') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.11</strong> Punto de equilibrio y taza de retorno</a>
  </div>         
    </div>
    </div>


  </div> <!-- FINALIZA 1 fila para 1 tema -->


<div class="row"><!-- Inicia 2 fila para 2 tema -->

    <div class="col-12 title text-center"> <h1>2</h1> <h4>Calculadora</h4></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('calculadora_tema2.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.1</strong> Calculadora General</a>
  </div>         
    </div>
    </div>

  </div><!-- FINALIZA 2 fila para 2 tema -->


  </div>
@endsection