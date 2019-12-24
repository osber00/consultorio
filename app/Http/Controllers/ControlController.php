<?php

namespace Consultorio\Http\Controllers;

use Illuminate\Http\Request;
use Consultorio\Models\Notasolicitud;
use Consultorio\Models\Solicitud;
use Consultorio\Models\Prioridad;
use Consultorio\Models\Categoria;
use Consultorio\Models\User;
use Auth;

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
    	$notas = Notasolicitud::where('solicitud_id',$solicitud->id)->with('user')->get();
    	return view('control.versolicitud',compact('solicitud','estudiantes','tutores','categorias','prioridades','notas'));
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

    public function agregarnota(Request $request){
    	$solicitud = Solicitud::find($request->get('solicitud_id'));
    	//dd($request->all());
    	if ($request->hasFile('archivo')) {
    		$ext    = $request->file('archivo')->getClientOriginalExtension();
            //dd($ext);
            if ($ext=='pdf' || $ext == 'jpg' || $ext == 'JPG' || $ext == 'png' || $ext == 'PNG'){
            	$file = $request->file('archivo');
                $archivo = str_slug($solicitud->titulo).".".$ext;
                $numDocNotas = Notasolicitud::where('solicitud_id',$solicitud->id)->count() + 1;
                //$ruta = $request->archivo->store($solicitud->id);
                $url = \Storage::disk('local')->put($solicitud->id.'/'.$numDocNotas.'-'.$archivo, \File::get($file));
                //dd($url);

                //dd($numDocNotas);
                $notasolicitud = new Notasolicitud();
                $notasolicitud->nota = $request->get('nota');
                //$notasolicitud->archivo = $ruta;
                $notasolicitud->archivo = $numDocNotas.'-'.$archivo;
                $notasolicitud->user_id = Auth::user()->id;
                $notasolicitud->solicitud_id = $solicitud->id;
                if ($request->get('privada')){
                    $notasolicitud->publico = false;
                }
                $notasolicitud->save();
                return back();
            }else{
            	//No formato
            	
            }
    	}else{
    		$notasolicitud = new Notasolicitud();
            $notasolicitud->nota = $request->get('nota');
            $notasolicitud->user_id = Auth::user()->id;
            $notasolicitud->solicitud_id = $solicitud->id;
            if ($request->get('privada')){
                $notasolicitud->publico = false;
            }
            $notasolicitud->save();
            return back();
    	}
    }
}
