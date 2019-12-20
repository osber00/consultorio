<?php

namespace Consultorio\Http\Controllers;

use Illuminate\Http\Request;
use Consultorio\Models\Solicitud;
use Consultorio\Models\Prioridad;
use Consultorio\Models\Categoria;
use Consultorio\Models\User;

class ControlController extends Controller
{
    public function inicio(){
    	$solicitudes = Solicitud::where('eliminada',false)
    			->with(['user','responsable','revisor','estado','prioridad','categoria'])
    			->orderBy('id','asc')
    			->get();
    	return view('control.inicio',compact('solicitudes'));
    }

    public function versolicitud($id){
    	$solicitud = Solicitud::where('id',$id)
    			->with(['user','responsable','estado','prioridad','categoria'])
    			->first();
    	$estudiantes = User::where(['rol_id'=>3, 'activo' => 1])->get();
    	$tutores = User::where(['rol_id'=>2, 'activo' => 1])->get();
    	$categorias = Categoria::all();
    	$prioridades = Prioridad::all();
    	return view('control.versolicitud',compact('solicitud','estudiantes','tutores','categorias','prioridades'));
    }

    public function asignaresponsable(Request $request){
    	$solicitud = Solicitud::find($request->get('solicitud_id'));
    	if ($solicitud) {
    		$solicitud->responsable_id = $request->get('responsable_id');
    		$solicitud->estado_id = 2;
    		$solicitud->save();
    		return back();
    	}else{
    		return back();
    	}
    	//dd($request->all());
    }

    public function asignarsupervisor(Request $request){
    	$solicitud = Solicitud::find($request->get('solicitud_id'));
    	if ($solicitud) {
    		$solicitud->revisor_id = $request->get('revisor_id');
    		$solicitud->save();
    		return back();
    	}else{
    		return back();
    	}
    	//dd($request->all());
    }

    public function modificarcategoria(Request $request){
    	$solicitud = Solicitud::find($request->get('solicitud_id'));
    	if ($solicitud) {
    		$solicitud->categoria_id = $request->get('categoria_id');
    		$solicitud->save();
    		return back();
    	}else{
    		return back();
    	}
    }

    public function modificarprioridad(Request $request){
    	$solicitud = Solicitud::find($request->get('solicitud_id'));
    	if ($solicitud) {
    		$solicitud->prioridad_id = $request->get('prioridad_id');
    		$solicitud->save();
    		return back();
    	}else{
    		return back();
    	}
    }
}
