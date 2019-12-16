<?php

namespace Consultorio\Http\Controllers;

use Illuminate\Http\Request;
use Consultorio\Models\Solicitud;
use Auth;

class FrontController extends Controller
{
    public function inicio(){
    	return view('front.inicio');
    }

    public function solicitud(Request $request){
    	//dd($request->all());
    	$solicitud = new Solicitud();
    	$solicitud->titulo = $request->get('titulo');
    	$solicitud->descripcion = $request->get('descripcion');
    	$solicitud->user_id = Auth::user()->id;
    	$solicitud->responsable_id = 1;
    	$solicitud->estado_id = 1;
    	$solicitud->prioridad_id = 2;
    	$solicitud->categoria_id = 1;
    	$solicitud->save();
    	$request->flash('paso2','Adjuntar documentos');
    	return back();
    }

    public function documentos(Request $request){
    	
    }
}
