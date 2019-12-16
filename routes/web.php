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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
