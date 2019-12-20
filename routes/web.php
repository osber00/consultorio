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

Route::group(['prefix'=>'control'],function(){
	Route::get('','ControlController@inicio')->name('admin');
	Route::get('versolicitud/{id}','ControlController@versolicitud')->name('versolicitud');
	Route::post('asignaresponsable','ControlController@asignaresponsable')->name('asignaresponsable');
	Route::post('asignarsupervisor','ControlController@asignarsupervisor')->name('asignarsupervisor');
	Route::post('modificarcategoria','ControlController@modificarcategoria')->name('modificarcategoria');
	Route::post('modificarprioridad','ControlController@modificarprioridad')->name('modificarprioridad');
	Route::post('agregarnota','ControlController@agregarnota')->name('agregarnota');

	//Route::post('modificarcategoria','ControlController@modificarcategoria')->name('modificarcategoria');
	//Route::post('modificarprioridad','ControlController@modificarprioridad')->name('modificarprioridad');
});

Route::get('{folder}/{file}',function($folder,$file){
	$file = Storage::url("$folder/$file");
	return Response::make(file_get_contents($file),200);
	})->where([
	'file' => '(.*?)\.(jpg|png|jpeg|gif|pdf)$'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
