@extends('template.plantilla_alfa')

@section('content')

  <div class="section border" >
  <div class="card  ">
    <div class="card-body ">
      <h1 class="text-center font-weight-bold">Paneles Solares</h1>
      Animate a conocer a cerca de los diferentes tipos de paneles solares, sus tipos, formas, diseños, y cuales son los mejores a elegir para cada uno de los proyectos que tienes en mente.
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
  <button class="btn btn-block text-left"> <img src="https://img.icons8.com/ios/40/000000/solar-panel.png">Diferentes tecnologias y tipos de paneles asi como la correcta implementación de cada una de ellas</button>
  </div>         
    </div>


  <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/ios/40/000000/solar-panel.png">Aprender a leer las caracteristicas y fichas tecnicas de los paneles solares</button>
  </div>         
    </div>


    <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/ios/40/000000/solar-panel.png">Datos interesantes sobre la radiación Solar</button>
  </div>         
    </div>


    



    </div>

  <div class="col-6 text-justyfi">
    
    <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/ios/40/000000/solar-panel.png">Aprende todo lo que debes tener en cuenta al momento de realizar una instalación de modulos fotovoltaicos</button>
  </div>         
    </div>  

  <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn r btn-block text-left"> <img src="https://img.icons8.com/ios/40/000000/solar-panel.png">Aprender calculos necesarios para el uso de paneles solares</button>
  </div>         
    </div>

    <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <button class="btn  btn-block text-left"> <img src="https://img.icons8.com/ios/40/000000/solar-panel.png">Otros Temas Interesantes</button>
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
  <a class="btn rounded-pill btn-block bg-success text-left temas" href="{{asset('panel_tema1.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.1</strong> Definición De un Panel Solar</a>
  <!-- 
            <button class="btn rounded-pill btn-block"> <img src="https://img.icons8.com/ios-filled/30/000000/sun.png">Definición De un Panel Solar</button></div>
         <p class="text " ><a href="#definicion" class="links">Composición del panel solar</a> </p> -->
  </div>         
    </div>
    </div>

  <div class="col-12 col-sm-12 col-md-6  text-justyfi"> 
  <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left temas" href="{{asset('panel_tema1.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.2</strong> Composición del panel solar</a> 
  <!-- 
            <button class="btn rounded-pill btn-block"> <img src="https://img.icons8.com/ios-filled/30/000000/sun.png">Definición De un Panel Solar</button></div>
         <p class="text " ><a href="#definicion" class="links">Composición del panel solar</a> </p> -->
  </div>         
    </div>

  </div>



  <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left temas" href="{{asset('panel_tema1.3') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.3</strong> Paneles solares Monocristalinos</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema1.4') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.4</strong> Paneles solares Policristalinos</a>
  </div>         
    </div>
    </div>


    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema1.5') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.5</strong> ¿Que es mejor, policristalino o monocristalino?, ¿Cual Elejir?</a>
  </div>         
    </div>
    </div>


    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema1.6') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.6</strong> Como instalar un panel solar</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema1.7') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.7</strong> Orientación Geografica</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema1.8') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.8</strong> Definición (Retie,. Retilap)</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema1.9') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.9</strong> Constitucion de Una celula Solar</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema1.10') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.10</strong> Efecto Fotovoltaico</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema1.11') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.11</strong> Semiconductores P y N</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema1.12') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>1.12</strong> Celula Solar</a>
  </div>         
    </div>
    </div>





  </div>
  <div class="row"><!-- inicia segunda fila para segundo tema -->

    <div class="col-12 title text-center"> <h1>2</h1><h4>Criterios para conocer la calidad de un panel solar</h1></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left"href="{{asset('panel_tema2.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.1</strong> Comportamiento en poca Luz</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema2.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.2</strong> Eficiencia en la celda</a>
  </div>         
    </div>
    </div>

  <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema2.3') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.3</strong> Tolerancia de Potencia</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema2.4') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.4</strong> Durabilidad</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema2.5') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.5</strong> Alta densidad de potencia</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema2.6') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.6</strong> PID (Degradación Inducida por potencia)</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema2.7') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>2.7</strong> Garantia en años</a>
  </div>         
    </div>
    </div>

  </div><!-- FINALIZA segunda fila para segundo tema -->

  <div class="row"><!-- inicia tercera fila para tercer tema -->

    <div class="col-12 title text-center"> <h1>3</h1><h4>Principales certificaciones con las que debe contar un panel solar</h1></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema3.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.1</strong> TUV SUD</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema3.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.2</strong> IEC 61215-2</a>
  </div>         
    </div>
    </div>

  <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema3.3') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.3</strong> IEC 61730-1-2</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema3.4') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>3.4</strong> IEC 61701 Lineas de Playa</a>
  </div>         
    </div>
    </div>
  </div><!-- FINALIZA tercera fila para tercer tema -->


  <div class="row"><!-- inicia cuarta fila para cuarto tema -->

    <div class="col-12 title text-center"> <h1>4</h1> <h4>Estandares mas comunes de paneles Solares</h4></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema4.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>4.1</strong> Paneles Solares, Voltajes comerciales</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema4.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>4.2</strong> linea de paneles en colombia</a>
  </div>         
    </div>
    </div>

  <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema4.3') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>4.3</strong> linea Mundial</a>
  </div>         
    </div>
    </div>


    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema4.4') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>4.4</strong>Fabricantes de Paneles en el Mundo</a>
  </div>         
    </div>
    </div>



  </div><!-- FINALIZA cuarta fila para Cuarto tema -->

  <div class="row"><!-- Inicia quinta fila para 5 tema -->

    <div class="col-12 title text-center"> <h1>5</h1> <h4>Como leer la ficha tecnica de un panel solar</h4></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema5.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>5.1</strong> Potencia Maxima</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema5.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>5.2</strong> Voltaje nominal</a>
  </div>         
    </div>
    </div>

  <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema5.3') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>5.3</strong> Corriente Nominal</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema5.4') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>5.4</strong> Voltaje y corriente en corto circuito</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema5.5') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>5.5</strong> Capacidad del Fusible</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema5.6') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>5.6</strong> Dimensiones</a>
  </div>         
    </div>
    </div>
  </div><!-- FINALIZA quinta fila para 5 tema -->


  <div class="row"><!-- Inicia sexta fila para 6 tema -->

    <div class="col-12 title text-center"> <h1>6</h1> <h4>La radiación Solar</h4></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema6.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>6.1</strong> Como Funciona la radiación</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema6.2') }}"role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>6.2</strong> Irradiancia e irradiacion</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema6.3') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>6.3</strong> radiacion sobre una superficie inclinada Ver formula</a>
  </div>         
    </div>
    </div>

  <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema6.4') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>6.4</strong> Hora sol pico dia</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema6.5') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>6.5</strong> Como calcular las horas sol pico (Latitud y Longitud)</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema6.6') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>6.6</strong> Importancia de la Inclinación del panel</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema6.7') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>6.7</strong> Punto Caliente</a>
  </div>         
    </div>
    </div>



  </div><!-- FINALIZA sexta fila para 6 tema -->

  <div class="row"><!-- Inicia Septima fila para 7 tema -->

    <div class="col-12 title text-center"> <h1>7</h1> <h4>Conexiones</h4></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema7.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>7.1</strong> Conexiones en paralelo y  ESquema</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema7.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>7.2</strong> Conexiones  en serie Y esquemas</a>
  </div>         
    </div>
    </div>

  </div><!-- FINALIZA septima fila para 7 tema -->


  <div class="row"><!-- Inicia Octava fila para 8 tema -->

    <div class="col-12 title text-center"> <h1>8</h1> <h4>Calculos</h4></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema8.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>8.1</strong> Como Calcular Mi consumo</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema8.2') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>8.2</strong> Como Calcular los paneles solares que Necesito</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema8.3') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>8.3</strong> Sombras y distancias minimas entre Modulos</a>
  </div>         
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema8.4') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>8.4</strong> Ejes de Seguimiento</a>
  </div>         
    </div>
    </div>

    

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema8.5') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>8.5</strong> Calculadora Solar.</a>
  </div>         
    </div>
    </div>

  </div><!-- FINALIZA octava fila para 8 tema -->


<div class="row"><!-- Inicia novena fila para 9 tema -->

    <div class="col-12 title text-center"> <h1>9</h1> <h4>Practica De paneles</h4></div>

    <div class="col-12 col-sm-12 col-md-6 text-justyfi  ">
      <div class="tema ">
          <div class="d-flex p-2 bd-highlight">
  <a class="btn rounded-pill btn-block bg-success text-left" href="{{asset('panel_tema9.1') }}" role="button" id="botonzoom"><img src="https://img.icons8.com/ios-filled/30/000000/sun.png"><strong>9.1</strong> Taller practico de paneles Solares</a>
  </div>         
    </div>
    </div>

  </div><!-- FINALIZA novena fila para 9 tema -->






  </div>
@endsection