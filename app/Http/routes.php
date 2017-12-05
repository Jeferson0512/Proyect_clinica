<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Unicamente para que las funciones cumplan el requisito
//Route:resource('blabla','blablaController',['only'=>['index','show','se escribe los metodos quue deseas que se muestren']]);

Route::group(['prefix'=>'Clinica/v1'], function(){
  Route::post('user_login','UsuarioController@login');
  Route::post('user_create','UsuarioController@store');
  Route::get('user_listado','UsuarioController@index');
  Route::resource('medico','MedicoController');
  Route::get('cita/{id}','CitaController@show');
  Route::get('cita','CitaController@index');
  Route::get('paciente/{id}','PacienteController@show');
});