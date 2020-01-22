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

Route::get('/','FrontController@home')->name('front');
Route::get('inicio','FrontController@inicio')->name('inicio');
Route::post('solicitud','FrontController@solicitud')->name('solicitud');
Route::get('documentos/{solicitud_id}','FrontController@documentos')->name('documentos');
Route::post('adjuntardocumentos','FrontController@adjuntardocumentos')->name('adjuntardocumentos');

Route::get('noticia/{slug}', 'FrontController@noticia')->name('noticia');
Route::get('categoria/{id}','FrontController@categoria')->name('categoria');
Route::get('faq/{slug}','FrontController@faq')->name('faq');
Route::get('buscar','FrontController@buscador')->name('buscar');


Route::group(['prefix'=>'control','middleware' => 'auth'],function(){

    //Solo admin
    Route::group(['middleware'=>'isAdmin'], function (){
        Route::get('','ControlController@inicio')->name('admin');
        Route::get('solicitudes','ControlController@solicitudes')->name('solicitudes');
        Route::get('solicitudestado/{est}','ControlController@solicitudestado')->name('solicitudestado');
        Route::get('testweekend','ControlController@testweekend')->name('testweekend');
        Route::get('asignarsupervisor/{id}/{supervisor}','ControlController@asignarsupervisor')->name('asignarsupervisor');
        Route::get('modificarcategoria/{id}/{categoria}','ControlController@modificarcategoria')->name('modificarcategoria');
        Route::get('modificarprioridad/{id}/{prioridad}','ControlController@modificarprioridad')->name('modificarprioridad');
        Route::get('asignaresponsable/{id}/{responsable}','ControlController@asignaresponsable')->name('asignaresponsable');
        Route::get('rechazarsolicitud/{id}','ControlController@rechazarsolicitud')->name('rechazarsolicitud');
        Route::get('pausarsolicitud/{id}','ControlController@pausarsolicitud')->name('pausarsolicitud');

        //Admin estudiantes y revisores
        Route::post('nuevousuario','UserController@nuevousuario')->name('nuevousuario');
        

        Route::resource('noticias','NoticiaController');
        Route::resource('faqs','FaqController');
        Route::get('adminestudiantes','ControlController@adminestudiantes')->name('adminestudiantes');
    });

    Route::group(['middleware'=>'isEst'],function (){
        Route::get('estudiante','ControlController@estudiante')->name('estudiante');
        Route::get('aceptarsolicitud/{solicitud_id}','ControlController@aceptarsolicitud')->name('aceptarsolicitud');
        Route::get('cerrarsolicitud/{solicitud_id}','ControlController@cerrarsolicitud')->name('cerrarsolicitud');
    });

    Route::group(['middleware'=>'isRevisor'],function (){
        Route::get('revisor','ControlController@revisor')->name('revisor');
        Route::get('autorizacioncierre/{solicitud_id}','ControlController@autorizacioncierre')->name('autorizacioncierre');
    });


    Route::get('versolicitud/{id}','ControlController@versolicitud')->name('versolicitud');
	Route::get('transferenciadecaso/{id}/{agente}','ControlController@transferenciadecaso')->name('transferenciadecaso');

	Route::post('agregarnota','ControlController@agregarnota')->name('agregarnota');
	Route::get('publicoprivado/{notasolicitud_id}/{solicitud}','ControlController@publicoprivado')->name('publicoprivado');
	Route::get('notasolicitud/{id}/{accion}','ControlController@notasolicitud')->name('notasolicitud');
	Route::post('editarnotasolicitud','ControlController@editarnotasolicitud')->name('editarnotasolicitud');
	Route::post('eliminarnotasolicitud','ControlController@eliminarnotasolicitud')->name('eliminarnotasolicitud');
    Route::get('historialnotaeditada/{nota_id}','ControlController@historialnotaeditada')->name('historialnotaeditada');
	//Route::post('modificarprioridad','ControlController@modificarprioridad')->name('modificarprioridad');

});



Route::get('nota/documento/{id}','AssetController@notadocumento')->name('notadocumento');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
