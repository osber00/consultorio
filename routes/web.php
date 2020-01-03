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
	Route::get('asignaresponsable/{id}/{responsable}','ControlController@asignaresponsable')->name('asignaresponsable')->middleware('isAdmin');
	Route::get('transferenciadecaso/{id}/{agente}','ControlController@transferenciadecaso')->name('transferenciadecaso');
	Route::get('asignarsupervisor/{id}/{supervisor}','ControlController@asignarsupervisor')->name('asignarsupervisor')->middleware('isAdmin');
	Route::get('modificarcategoria/{id}/{categoria}','ControlController@modificarcategoria')->name('modificarcategoria')->middleware('isAdmin');
	Route::get('modificarprioridad/{id}/{prioridad}','ControlController@modificarprioridad')->name('modificarprioridad')->middleware('isAdmin');
	Route::post('agregarnota','ControlController@agregarnota')->name('agregarnota');
	Route::get('publicoprivado/{notasolicitud_id}/{solicitud}','ControlController@publicoprivado')->name('publicoprivado');
	Route::get('notasolicitud/{id}/{accion}','ControlController@notasolicitud')->name('notasolicitud');
	Route::post('editarnotasolicitud','ControlController@editarnotasolicitud')->name('editarnotasolicitud');
	Route::post('eliminarnotasolicitud','ControlController@eliminarnotasolicitud')->name('eliminarnotasolicitud');
    Route::get('historialnotaeditada/{nota_id}','ControlController@historialnotaeditada')->name('historialnotaeditada');
	//Route::post('modificarprioridad','ControlController@modificarprioridad')->name('modificarprioridad');

    Route::get('estudiante','ControlController@estudiante')->name('estudiante');
    Route::get('aceptarsolicitud/{solicitud_id}','ControlController@aceptarsolicitud')->name('aceptarsolicitud');

    Route::get('revisor','ControlController@revisor')->name('revisor');
});

/*Route::group(['prefix'=>'estudiante'],function (){
    Route::get('/', 'EstudianteController@inicio')->name('estudiante');
});*/

/*Route::group(['prefix'=>'tutor'],function (){
    Route::get('/', 'TutorController@inicio')->name('tutor');
});*/

Route::get('nota/documento/{id}','AssetController@notadocumento')->name('notadocumento');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
