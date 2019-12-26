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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','FrontController@inicio')->name('inicio');
Route::post('solicitud','FrontController@solicitud')->name('solicitud');
Route::get('documentos/{solicitud_id}','FrontController@documentos')->name('documentos');
Route::post('adjuntardocumentos','FrontController@adjuntardocumentos')->name('adjuntardocumentos');

Route::group(['prefix'=>'control','middleware' => 'auth'],function(){
	Route::get('','ControlController@inicio')->name('admin');
	Route::get('versolicitud/{id}','ControlController@versolicitud')->name('versolicitud');
	Route::get('asignaresponsable/{id}/{responsable}','ControlController@asignaresponsable')->name('asignaresponsable');
	Route::get('asignarsupervisor/{id}/{supervisor}','ControlController@asignarsupervisor')->name('asignarsupervisor');
	Route::get('modificarcategoria/{id}/{categoria}','ControlController@modificarcategoria')->name('modificarcategoria');
	Route::get('modificarprioridad/{id}/{prioridad}','ControlController@modificarprioridad')->name('modificarprioridad');
	Route::post('agregarnota','ControlController@agregarnota')->name('agregarnota');

	//Route::post('modificarcategoria','ControlController@modificarcategoria')->name('modificarcategoria');
	//Route::post('modificarprioridad','ControlController@modificarprioridad')->name('modificarprioridad');
});

Route::group(['prefix'=>'estudiante'],function (){
    Route::get('/', 'EstudianteController@inicio')->name('estudiante');
});

Route::group(['prefix'=>'tutor'],function (){
    Route::get('/', 'TutorController@inicio')->name('tutor');
});

Route::get('nota/documento/{id}','AssetController@notadocumento')->name('notadocumento');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
