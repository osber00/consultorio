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
    //Listado de solicitudes
    public function inicio(){
    	$solicitudes = Solicitud::where('eliminada',false)
    			->with(['user','responsable','revisor','estado','prioridad','categoria'])
    			->orderBy('id','asc')
    			->get();
    	return view('control.inicio',compact('solicitudes'));
    }

    //Ver detalles de una solicitud
    public function versolicitud($id){
    	$solicitud = Solicitud::where('id',$id)
    			->with(['user','responsable','estado','prioridad','categoria'])
    			->first();
    	$estudiantes = User::where(['rol_id'=>3, 'activo' => 1])->get();
    	$tutores = User::where(['rol_id'=>2, 'activo' => 1])->get();
    	$categorias = Categoria::all();
    	$prioridades = Prioridad::all();
    	$notas = Notasolicitud::where(['solicitud_id'=>$solicitud->id,'eliminado'=>0])->with('user')->get();
    	return view('control.versolicitud',compact('solicitud','estudiantes','tutores','categorias','prioridades','notas'));
    }

    //Asignar estudiante practicante a una solicitud
    public function asignaresponsable(Request $request, $id,$responsable){
    	$solicitud = Solicitud::find($id);
    	if ($solicitud) {
    		$solicitud->responsable_id = $responsable;
    		$solicitud->estado_id = 2;
    		$solicitud->save();
    		return back();
    	}else{
    		return back();
    	}
    	//dd($request->all());
    }

    //Asignar revisor a una solicitud
    public function asignarsupervisor(Request $request,$id,$supervisor){
    	$solicitud = Solicitud::find($id);
    	if ($solicitud) {
    		$solicitud->revisor_id = $supervisor;
    		$solicitud->save();
    		return back();
    	}else{
    		return back();
    	}
    	//dd($request->all());
    }

    //Modificar categoria de una solicitud
    public function modificarcategoria(Request $request, $id, $categoria){
    	$solicitud = Solicitud::find($id);
    	if ($solicitud) {
    		$solicitud->categoria_id = $categoria;
    		$solicitud->save();
    		return back();
    	}else{
    		return back();
    	}
    }


    //Modificar prioridad de una solicitud
    public function modificarprioridad(Request $request, $id, $prioridad){
    	$solicitud = Solicitud::find($id);
    	if ($solicitud) {
    		$solicitud->prioridad_id = $prioridad;
    		$solicitud->save();
    		return back();
    	}else{
    		return back();
    	}
    }

    //Agregar nota con o sin adjunto
    public function agregarnota(Request $request){
    	$solicitud = Solicitud::find($request->get('solicitud_id'));
    	//dd($request->all());
    	if ($request->hasFile('archivo')) {
    		 $ext    = $request->file('archivo')->getClientOriginalExtension();
            str_slug($ext);
            if ($ext=='pdf' || $ext == 'jpg' || $ext == 'png'){
                //Salvar archivo en public de storage
                $ruta = $request->archivo->store($solicitud->id);

                //dd($numDocNotas);
                $notasolicitud = new Notasolicitud();
                $notasolicitud->nota = $request->get('nota');
                $notasolicitud->archivo = $ruta;
                $notasolicitud->ext = $ext;
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

    //Consulta ajax de contenido de una nota
    public function notasolicitud($id,$accion){
        $notasolicitud = Notasolicitud::find($id);
        sleep(1);
        if ($accion == 'editar'){
            return view('control.edicion_nota',compact('notasolicitud'));
        }else if($accion == 'eliminar'){
            return view('control.borrar_nota',compact('notasolicitud'));
        }
    }

    //Modificar contenido de nota
    public function editarnotasolicitud(Request $request){
        $notasolicitud = Notasolicitud::find($request->get('nota_id'));
        if ($notasolicitud){
            $notasolicitud->nota = $request->get('edicion_nota');
            $notasolicitud->save();
            return back();
        }
    }

    //Marcar nota como privada o pública
    public function publicoprivado(Request $request,$notasolicitud_id){
        $notasolicitud = Notasolicitud::find($notasolicitud_id);
        if ($notasolicitud){
            $notasolicitud->publico = !$notasolicitud->publico;
            $notasolicitud->save();
            return back();
        }
    }

    //Eliminar nota de solicitud
    public function eliminarnotasolicitud(Request $request){
        $notasolicitud = Notasolicitud::find($request->get('nota_id'));
        if ($notasolicitud){
            $notasolicitud->eliminado = true;
            $notasolicitud->save();
            return back();
        }
    }
}
