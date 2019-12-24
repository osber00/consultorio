<?php

namespace Consultorio\Http\Controllers;

use Illuminate\Http\Request;
use Consultorio\Models\Solicitud;
use Consultorio\Models\Notasolicitud;
use Auth;

class FrontController extends Controller
{
    public function inicio(){
        $solicitudes =  Solicitud::
                where(['user_id'=>Auth::user()->id,'eliminada'=>0])
                ->with(['responsable','estado','prioridad','categoria'])
                ->get();
    	return view('front.inicio',compact('solicitudes'));
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
    	return redirect()->route('documentos',$solicitud->id);
    }

    public function documentos($solicitud_id){
        $solicitud = Solicitud::find($solicitud_id);
        $notasolicitud = Notasolicitud::where(['user_id'=>Auth::user()->id,'solicitud_id'=>$solicitud->id])->get();
        return view('front.documentos',compact('solicitud','notasolicitud'));
    }

    public function adjuntardocumentos(Request $request){
        
    	if ($request->hasFile('archivo')) {
            $mime   = $request->file('archivo')->getMimeType();
            $ext    = $request->file('archivo')->getClientOriginalExtension();
            str_slug($ext);
            if ($ext=='pdf' || $ext == 'jpg' || $ext == 'png'){
                $solicitud = Solicitud::find($request->get('solicitud_id'));
                //Salvar archivo en public de storage
                $ruta = $request->archivo->store($solicitud->id);

                $notasolicitud = new Notasolicitud();
                $notasolicitud->nota = $request->get('nota');
                $notasolicitud->archivo = $ruta;
                $notasolicitud->ext = $ext;
                $notasolicitud->user_id = Auth::user()->id;
                $notasolicitud->solicitud_id = $solicitud->id;
                $notasolicitud->save();

                //$tutorial->pdf = $guide;
                //$tutorial->save();

                $request->session()->flash('archivo','exito');
                return redirect()->route('documentos',$solicitud->id);
            }else{
                //No formato
                $request->session()->flash('no-formato','no-formato');
                return redirect()->back();
            }
        }else{
            $request->session()->flash('no-file','no-file');
            return redirect()->back();
        }
    }
}
