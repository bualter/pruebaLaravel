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

Route::get('/miPrimeraRuta',function(){
    return 'Cree mi primera ruta en Laravel.';
} );

Route::get('/resultado/{numero}/{numero2?}',function($numero,$numero2=null){
  if (!$numero2){
    return (($numero%2)?"Impar":"Par");
  }
    else{
    return $numero * $numero2;
    }
} );


// 180821
// la pongo arriba de buscar get('/peliculas/{id}', antes, porque primero va intentar llamar a esa 
Route::get('/peliculas/listarTodas', 'PeliculasController@listarTodas');

Route::get('/peliculas/listarTodasDb', 'PeliculasController@listarTodasDb');

// 180816
Route::get('/peliculas/{id}', 'PeliculasController@buscarPeliculaId');

//Route::get('/peliculas/buscar/{nombre}​', );

Route::get('/peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');
