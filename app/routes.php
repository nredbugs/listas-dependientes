<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

//Ruta para consultar todos los paises
Route::get('paises', function(){
  if(Request::ajax()){
      return ListaPaises::all()->toJson();
  }
});

//Ruta en la cual retornamos los estados relaccionados con el id del pais
Route::POST('estados', function(){
  if(Request::ajax()){
  	  $id_pais = e(Input::get('pais'));
  	  return ListaEstados::where('id_pais','=', $id_pais)->get();
  }
});