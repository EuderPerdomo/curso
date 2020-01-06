	<?php

	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider within a group which
	| contains the "web" middleware group. Now create something great!
	|
	*/

	Route::get('/', function () {
	    return view('welcome');
	});

	//Vista Principal Home
	Route::get('home', function () {return view('template.home'); });
	 //Vista Principal Antes de Iniciar
	Route::get('antesIniciar', function () {return view('layout.antesIniciar.temario_antesIniciar'); });
	 //Vista Principal Paneles
	Route::get('paneles', function () {return view('layout.paneles.temario_paneles'); }); 
	//Vista Principal Controladores
	Route::get('controladores', function () {return view('layout.controlador.temario_controlador'); }); 
	//Vista Principal Inversores
	Route::get('inversores', function () {return view('layout.inversor.temario_inversor'); }); 
	//Vista Principal Baterias
	Route::get('baterias', function () {return view('layout.bateria.temario_bateria'); }); 
	//Vista Principal Normatividad
	Route::get('normatividad', function () {return view('layout.normatividad.temario_normatividad'); });
	//Vista Principal Calculadora
	Route::get('calculadora', function () {return view('layout.calculadora.temario_calculadora'); });
	//Vista Principal ParaFinalizar
	Route::get('paraFinalizar', function () {return view('layout.paraFinalizar.temario_paraFinalizar'); });

	//Temario Home
	//******************************************************Temario Antes de Iniciar***********************************************
	//Inicia Temario Antes de Iniciar
		//****Grupo 1
	Route::group([], function() {
	Route::get('antesIniciar_tema1.1', function () {return view('layout.antesIniciar.tema.1.unopuno');});
	Route::get('antesIniciar_tema1.2', function () {return view('layout.antesIniciar.tema.1.unopdos');});
	Route::get('antesIniciar_tema1.3', function () {return view('layout.antesIniciar.tema.1.unoptres');});
	Route::get('antesIniciar_tema1.4', function () {return view('layout.antesIniciar.tema.1.unopcuatro');});
	Route::get('antesIniciar_tema1.5', function () {return view('layout.antesIniciar.tema.1.unopcinco'); });
	Route::get('antesIniciar_tema1.6', function () {return view('layout.antesIniciar.tema.1.unopseis'); });
	Route::get('antesIniciar_tema1.7', function () {return view('layout.antesIniciar.tema.1.unopsiete'); });
	Route::get('antesIniciar_tema1.8', function () {return view('layout.antesIniciar.tema.1.unopocho'); }); 
	Route::get('antesIniciar_tema1.9', function () {return view('layout.antesIniciar.tema.1.unopnueve'); });
	Route::get('antesIniciar_tema1.10', function () {return view('layout.antesIniciar.tema.1.unopdiez'); });
	});

	//Finaliza Temario Antes de Iniciar
	//****************************************************** Inicia Temario paneles************************************************
	//****Grupo 1
	Route::group([], function() {
	Route::get('panel_tema1.1', function () {return view('layout.paneles.tema.1.unopuno');});
	Route::get('panel_tema1.2', function () {return view('layout.paneles.tema.1.unopdos');});
	Route::get('panel_tema1.3', function () {return view('layout.paneles.tema.1.unoptres');});
	Route::get('panel_tema1.4', function () {return view('layout.paneles.tema.1.unopcuatro');});
	Route::get('panel_tema1.5', function () {return view('layout.paneles.tema.1.unopcinco'); });
	Route::get('panel_tema1.6', function () {return view('layout.paneles.tema.1.unopseis'); });
	Route::get('panel_tema1.7', function () {return view('layout.paneles.tema.1.unopsiete'); });
	Route::get('panel_tema1.8', function () {return view('layout.paneles.tema.1.unopocho'); }); 
	Route::get('panel_tema1.9', function () {return view('layout.paneles.tema.1.unopnueve'); });
	Route::get('panel_tema1.10', function () {return view('layout.paneles.tema.1.unopdiez'); });
	Route::get('panel_tema1.11', function () {return view('layout.paneles.tema.1.unoponce'); });
	Route::get('panel_tema1.12', function () {return view('layout.paneles.tema.1.unopdoce'); });
	});

	//****Grupo 2
	Route::group([], function() {

	   Route::get('panel_tema2.1', function () {return view('layout.paneles.tema.2.dospuno'); });
	Route::get('panel_tema2.2', function () {return view('layout.paneles.tema.2.dospdos'); });
	Route::get('panel_tema2.3', function () {return view('layout.paneles.tema.2.dosptres'); });
	Route::get('panel_tema2.4', function () {return view('layout.paneles.tema.2.dospcuatro'); });
	Route::get('panel_tema2.5', function () {return view('layout.paneles.tema.2.dospcinco'); });
	Route::get('panel_tema2.6', function () {return view('layout.paneles.tema.2.dospseis'); });
	Route::get('panel_tema2.7', function () {return view('layout.paneles.tema.2.dospsiete'); });
	});


	//****Grupo 3
	Route::group([], function() {

	   Route::get('panel_tema3.1', function () {return view('layout.paneles.tema.3.trespuno'); });
	Route::get('panel_tema3.2', function () {return view('layout.paneles.tema.3.trespdos'); });
	Route::get('panel_tema3.3', function () {return view('layout.paneles.tema.3.tresptres'); });
	Route::get('panel_tema3.4', function () {return view('layout.paneles.tema.3.trespcuatro'); });
	});
	//****Grupo 4
	Route::group([], function() {

	   Route::get('panel_tema4.1', function () {return view('layout.paneles.tema.4.cuatropuno'); });
	Route::get('panel_tema4.2', function () {return view('layout.paneles.tema.4.cuatropdos'); });
	Route::get('panel_tema4.3', function () {return view('layout.paneles.tema.4.cuatroptres'); });
	Route::get('panel_tema4.4', function () {return view('layout.paneles.tema.4.cuatropcuatro'); });
	});
	//****Grupo 5
	Route::group([], function() {
	Route::get('panel_tema5.1', function () {return view('layout.paneles.tema.5.cincopuno');});
	Route::get('panel_tema5.2', function () {return view('layout.paneles.tema.5.cincopdos');});
	Route::get('panel_tema5.3', function () {return view('layout.paneles.tema.5.cincoptres');});
	Route::get('panel_tema5.4', function () {return view('layout.paneles.tema.5.cincopcuatro');});
	Route::get('panel_tema5.5', function () {return view('layout.paneles.tema.5.cincopcinco');});
	Route::get('panel_tema5.6', function () {return view('layout.paneles.tema.5.cincopseix');});

	});
	//****Grupo 6
	Route::group([], function() {
	Route::get('panel_tema6.1', function () {return view('layout.paneles.tema.6.seixpuno');});
	Route::get('panel_tema6.2', function () {return view('layout.paneles.tema.6.seixpdos');});
	Route::get('panel_tema6.3', function () {return view('layout.paneles.tema.6.seixptres');});
	Route::get('panel_tema6.4', function () {return view('layout.paneles.tema.6.seixpcuatro');});
	Route::get('panel_tema6.5', function () {return view('layout.paneles.tema.6.seixpcinco');});
	Route::get('panel_tema6.6', function () {return view('layout.paneles.tema.6.seixpseix');});
	Route::get('panel_tema6.7', function () {return view('layout.paneles.tema.6.seixpsiete');});

	});
	//****Grupo 7
	Route::group([], function() {
	Route::get('panel_tema7.1', function () {return view('layout.paneles.tema.7.sietepuno');});
	Route::get('panel_tema7.2', function () {return view('layout.paneles.tema.7.sietepdos');});

	});
	//****Grupo 8
	Route::group([], function() {
	Route::get('panel_tema8.1', function () {return view('layout.paneles.tema.8.ochopuno');});
	Route::get('panel_tema8.2', function () {return view('layout.paneles.tema.8.ochopdos');});
	Route::get('panel_tema8.3', function () {return view('layout.paneles.tema.8.ochoptres');});
	Route::get('panel_tema8.4', function () {return view('layout.paneles.tema.8.ochopcuatro');});
	Route::get('panel_tema8.5', function () {return view('layout.paneles.tema.8.ochopcinco');});
	Route::get('panel_tema8.6', function () {return view('layout.paneles.tema.8.ochopseix');});

	});
	//****Grupo 9
	Route::group([], function() {

	Route::get('panel_tema9.1', function () {return view('layout.paneles.tema.9.nuevepuno');});

	});

	// finaliza Temario paneles

	//************************************************Temario Controladores*********************************************************
	//Inicia temario Controladores
	//****Grupo 1
	Route::group([], function() {
	   Route::get('controlador_tema1.1', function () {return view('layout.controlador.tema.1.unopuno');});
	Route::get('controlador_tema1.2', function () {return view('layout.controlador.tema.1.unopdos');});
	Route::get('controlador_tema1.3', function () {return view('layout.controlador.tema.1.unoptres');});

	});

	//****Grupo 2
	Route::group([], function() {
	   Route::get('controlador_tema2.1', function () {return view('layout.controlador.tema.2.dospuno');});
	});


	//****Grupo 3
	Route::group([], function() {
	   Route::get('controlador_tema3.1', function () {return view('layout.controlador.tema.3.trespuno');});
	Route::get('controlador_tema3.2', function () {return view('layout.controlador.tema.3.trespdos');});
	});
	//****Grupo 4
	Route::group([], function() {
	   Route::get('controlador_tema4.1', function () {return view('layout.controlador.tema.4.cuatropuno');});
	});
	//****Grupo 5
	Route::group([], function() {
	Route::get('controlador_tema5.1', function () {return view('layout.controlador.tema.5.cincopuno');});
	});
	//****Grupo 6
	Route::group([], function() {
	Route::get('controlador_tema6.1', function () {return view('layout.controlador.tema.6.seixpuno');});
	});

	//Finaliza temario Controladores


	//*******************************************************Temario Inversores*******************************************
	//Inicia Temario Inversores
	//****Grupo 1
	Route::group([], function() {
	   Route::get('inversor_tema1.1', function () {return view('layout.inversor.tema.1.unopuno');});
	});

	//****Grupo 2
	Route::group([], function() {

	   Route::get('inversor_tema2.1', function () {return view('layout.inversor.tema.2.dospuno');});
	   Route::get('inversor_tema2.2', function () {return view('layout.inversor.tema.2.dospdos');});
	   Route::get('inversor_tema2.3', function () {return view('layout.inversor.tema.2.dosptres');});
	   Route::get('inversor_tema2.4', function () {return view('layout.inversor.tema.2.dospcuatro');});
	   Route::get('inversor_tema2.5', function () {return view('layout.inversor.tema.2.dospcinco');});
	   Route::get('inversor_tema2.6', function () {return view('layout.inversor.tema.2.dospseix');});
	   Route::get('inversor_tema2.7', function () {return view('layout.inversor.tema.2.dospsiete');});
	   Route::get('inversor_tema2.8', function () {return view('layout.inversor.tema.2.dospocho');});
	   Route::get('inversor_tema2.9', function () {return view('layout.inversor.tema.2.dospnueve');});
	   Route::get('inversor_tema2.10', function () {return view('layout.inversor.tema.2.dospdiez');});
	});


	//****Grupo 3
	Route::group([], function() {

	   Route::get('inversor_tema3.1', function () {return view('layout.inversor.tema.3.trespuno');});
	   Route::get('inversor_tema3.2', function () {return view('layout.inversor.tema.3.trespdos');});
	   Route::get('inversor_tema3.3', function () {return view('layout.inversor.tema.3.tresptres');});
	   Route::get('inversor_tema3.4', function () {return view('layout.inversor.tema.3.trespcuatro');});
	   Route::get('inversor_tema3.5', function () {return view('layout.inversor.tema.3.trespcinco');});
	   Route::get('inversor_tema3.6', function () {return view('layout.inversor.tema.3.trespseix');});


	});
	//****Grupo 4
	Route::group([], function() {

	   Route::get('inversor_tema4.1', function () {return view('layout.inversor.tema.4.cuatropuno');});
	   Route::get('inversor_tema4.2', function () {return view('layout.inversor.tema.4.cuatropdos');});

	});
	//****Grupo 5
	Route::group([], function() {

	Route::get('inversor_tema5.1', function () {return view('layout.inversor.tema.5.cincopuno');});

	});
	//****Grupo 6
	Route::group([], function() {

	Route::get('inversor_tema6.1', function () {return view('layout.inversor.tema.6.seixpuno');});

	});
	//Finaliza Temario Inversores
	//*********************************************************Temario Baterias*******************************************
	//Inicia Temario Baterias
	//****Grupo 1
	Route::group([], function() {

	   Route::get('bateria_tema1.1', function () {return view('layout.bateria.tema.1.unopuno');});
	   Route::get('bateria_tema1.2', function () {return view('layout.bateria.tema.1.unopdos');});
	});

	//****Grupo 2
	Route::group([], function() {

	   Route::get('bateria_tema2.1', function () {return view('layout.bateria.tema.2.dospuno');});
	   Route::get('bateria_tema2.2', function () {return view('layout.bateria.tema.2.dospdos');});
	   Route::get('bateria_tema2.3', function () {return view('layout.bateria.tema.2.dosptres');});
	   Route::get('bateria_tema2.4', function () {return view('layout.bateria.tema.2.dospcuatro');});
	});


	//****Grupo 3
	Route::group([], function() {

	   Route::get('bateria_tema3.1', function () {return view('layout.bateria.tema.3.trespuno');});
	   Route::get('bateria_tema3.2', function () {return view('layout.bateria.tema.3.trespdos');});
	   Route::get('bateria_tema3.3', function () {return view('layout.bateria.tema.3.tresptres');});
	   Route::get('bateria_tema3.4', function () {return view('layout.bateria.tema.3.trespcuatro');});
	  


	});
	//****Grupo 4
	Route::group([], function() {

	   Route::get('bateria_tema4.1', function () {return view('layout.bateria.tema.4.cuatropuno');});
	   Route::get('bateria_tema4.2', function () {return view('layout.bateria.tema.4.cuatropdos');});
	   
	});
	//****Grupo 5
	Route::group([], function() {

	Route::get('bateria_tema5.1', function () {return view('layout.bateria.tema.5.cincopuno');});

	});
	//****Grupo 6
	Route::group([], function() {

	Route::get('bateria_tema6.1', function () {return view('layout.bateria.tema.6.seixpuno');});

	});
	//Finaliza Temario Baterias


//******************************************************Temario Para Finalizar***********************************************
	//Inicia Temario Para Finalizar
		//****Grupo 1
	Route::group([], function() {
	Route::get('paraFinalizar_tema1.1', function () {return view('layout.paraFinalizar.tema.1.unopuno');});
	Route::get('paraFinalizar_tema1.2', function () {return view('layout.paraFinalizar.tema.1.unopdos');});
	Route::get('paraFinalizar_tema1.3', function () {return view('layout.paraFinalizar.tema.1.unoptres');});
	Route::get('paraFinalizar_tema1.4', function () {return view('layout.paraFinalizar.tema.1.unopcuatro');});
	Route::get('paraFinalizar_tema1.5', function () {return view('layout.paraFinalizar.tema.1.unopcinco'); });
	Route::get('paraFinalizar_tema1.6', function () {return view('layout.paraFinalizar.tema.1.unopseis'); });
	Route::get('paraFinalizar_tema1.7', function () {return view('layout.paraFinalizar.tema.1.unopsiete'); });
	Route::get('paraFinalizar_tema1.8', function () {return view('layout.paraFinalizar.tema.1.unopocho'); }); 
	});

	//Finaliza Temario Para Finalizar


	//******************************************************Temario Calculadora*******************************************
	//Inicia Temario Calculadora
	//****Grupo 1
	Route::group([], function() {


	Route::get('calculadora_tema1.1', function () {return view('layout.calculadora.tema.1.unopuno');});
	Route::get('calculadora_tema1.2', function () {return view('layout.calculadora.tema.1.unopdos');});
	Route::get('calculadora_tema1.3', function () {return view('layout.calculadora.tema.1.unoptres');});
	Route::get('calculadora_tema1.4', function () {return view('layout.calculadora.tema.1.unopcuatro');});
	Route::get('calculadora_tema1.5', function () {return view('layout.calculadora.tema.1.unopcinco'); });
	Route::get('calculadora_tema1.6', function () {return view('layout.calculadora.tema.1.unopseis'); });
	Route::get('calculadora_tema1.7', function () {return view('layout.calculadora.tema.1.unopsiete'); });
	Route::get('calculadora_tema1.8', function () {return view('layout.calculadora.tema.1.unopocho'); }); 
	Route::get('calculadora_tema1.9', function () {return view('layout.calculadora.tema.1.unopnueve'); });
	Route::get('calculadora_tema1.10', function () {return view('layout.calculadora.tema.1.unopdiez'); });
	Route::get('calculadora_tema1.11', function () {return view('layout.calculadora.tema.1.unoponce'); });

	});

	//****Grupo 2
	Route::group([], function() {

	   Route::get('calculadora_tema2.1', function () {return view('layout.calculadora.tema.2.dospuno');});   
	});

	//Finaliza Temario Calculadora

//******************************************************Temario Normatividadr***********************************************
	//Inicia Temario Normatividad
		//****Grupo 1
	Route::group([], function() {
	Route::get('normatividad_tema1.1', function () {return view('layout.normatividad.tema.1.unopuno');});
	Route::get('normatividad_tema1.2', function () {return view('layout.normatividad.tema.1.unopdos');});
	Route::get('normatividad_tema1.3', function () {return view('layout.normatividad.tema.1.unoptres');});
	Route::get('normatividad_tema1.4', function () {return view('layout.normatividad.tema.1.unopcuatro');});

	});

	//Finaliza Temario Normatividad
