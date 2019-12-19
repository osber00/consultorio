<?php

namespace Consultorio\Http\Controllers;

use Illuminate\Http\Request;
use Consultorio\Models\Solicitud;
use Consultorio\Models\Categoria;

class ControlController extends Controller
{
    public function inicio(){
    	$solicitudes = Solicitud::where('eliminada',false)
    			->with(['user','responsable','estado','prioridad','categoria'])
    			->orderBy('id','asc')
    			->get();
    	return view('control.inicio',compact('solicitudes'));
    }

    public function versolicitud($id){
    	$solicitud = Solicitud::where('id',$id)
    			->with(['user','responsable','estado','prioridad','categoria'])
    			->first();
    	$categorias = Categoria::all();
    	return view('control.versolicitud',compact('solicitud','categorias'));
    }
}
