<?php

namespace Consultorio\Http\Controllers;

use Consultorio\Models\Aceptarsolicitud;
use Consultorio\Models\Estado;
use Consultorio\Models\Monitorsolicitud;
use Consultorio\Models\Notaeditada;
use Illuminate\Http\Request;
use Consultorio\Models\Notasolicitud;
use Consultorio\Models\Solicitud;
use Consultorio\Models\Prioridad;
use Consultorio\Models\Categoria;
use Consultorio\Models\User;
use Auth;
use Illuminate\Support\Facades\Gate;
use function Sodium\increment;

class ControlController extends Controller
{
    /*public function __construct(){
        $this->middleware('guest')->except('logout');
    }*/

    //Listado de solicitudes
    public function inicio(){
    	$solicitudes = Solicitud::where('eliminada',false)
    			->with(['user','responsable','revisor','manejador','estado','prioridad','categoria'])
    			->orderBy('id','asc')
    			->get();

    	//dd($solicitudes);
    	return view('control.inicio',compact('solicitudes'));
    }

    //Ver detalles de una solicitud
    public function versolicitud($id){
        $solicitud = Solicitud::where('id',$id)
            ->with(['user','responsable','revisor','manejador','estado','prioridad','categoria'])
            ->first();
        if (Gate::allows('versolicitud',$solicitud)){
            $estudiantes = User::where(['rol_id'=>3, 'activo' => 1])->get();
            $tutores = User::where(['rol_id'=>2, 'activo' => 1])->get();
            $categorias = Categoria::all();
            $prioridades = Prioridad::all();
            $notas = Notasolicitud::where(['solicitud_id'=>$solicitud->id,'eliminado'=>0])->with('user')->get();
            $monitor = Monitorsolicitud::where('solicitud_id',$solicitud->id)->with(['accion','user'])->get();
            //mostrar solo si es estudiante
            if(auth()->user()->rol_id == 3){
                $aceptacion = Aceptarsolicitud::where(['user_id'=>auth()->user()->id,'solicitud_id'=>$solicitud->id])->count();
                if ($aceptacion == 0){
                    return view('control.aceptacion', compact('solicitud'));
                }
                $participacion_est = Monitorsolicitud::where(['user_id'=>auth()->user()->id,'solicitud_id'=>$solicitud->id,'accion_id'=>7])->count();
            }else{
                $participacion_est = null;
            }
            if(auth()->user()->rol_id == 2){
                $participacion_tut = Monitorsolicitud::where(['user_id'=>auth()->user()->id,'solicitud_id'=>$solicitud->id,'accion_id'=>7])->count();
            }else{
                $participacion_tut = null;
            }
            return view('control.versolicitud',compact('solicitud','estudiantes','tutores','categorias','prioridades','notas','monitor','participacion_est','participacion_tut'));
        }else{
    	    return back();
        }
    }

    //Asignar estudiante practicante a una solicitud
    public function asignaresponsable(Request $request, $id,$responsable){
    	$solicitud = Solicitud::find($id);
    	if ($solicitud) {
    		$solicitud->responsable_id = $responsable;
    		$solicitud->manejador_id = $responsable;
    		$solicitud->estado_id = 2;
    		$solicitud->save();
    		$res = User::find($responsable);
    		//Responsable
            Monitorsolicitud::create([
                'solicitud_id' => $solicitud->id,
                'accion_id' => 5,
                'user_id'   => auth()->user()->id,
                'detalles' => $res->nombre
            ]);

            //A cargo
            Monitorsolicitud::create([
                'solicitud_id' => $solicitud->id,
                'accion_id' => 15,
                'user_id'   => auth()->user()->id,
                'detalles' => $res->nombre
            ]);

            //Modificación de estado
            $estado = Estado::find(2);
            Monitorsolicitud::create([
                'solicitud_id' => $solicitud->id,
                'accion_id' => 10,
                'user_id'   => auth()->user()->id,
                'detalles' => $estado->estado
            ]);

    		return back();
    	}else{
    		return back();
    	}
    	//dd($request->all());
    }

    public function transferenciadecaso(Request $request, $id, $agente){
        $solicitud = Solicitud::find($id);
        if ($agente == 'admin'){
            $responsable = User::find(1);
            $estado = Estado::find(6);
            Monitorsolicitud::create([
                'solicitud_id' => $solicitud->id,
                'accion_id' => 10,
                'user_id'   => auth()->user()->id,
                'detalles' => $estado->estado
            ]);
        }elseif ($agente == 'tutor'){
            $responsable = User::find($solicitud->revisor_id);
            //estado
            $estado = Estado::find(4);
            Monitorsolicitud::create([
                'solicitud_id' => $solicitud->id,
                'accion_id' => 10,
                'user_id'   => auth()->user()->id,
                'detalles' => $estado->estado
            ]);
        }else{
            $responsable = User::find($solicitud->responsable_id);
            //estado
            $estado = Estado::find(3);
            Monitorsolicitud::create([
                'solicitud_id' => $solicitud->id,
                'accion_id' => 10,
                'user_id'   => auth()->user()->id,
                'detalles' => $estado->estado
            ]);
        }

        if ($solicitud) {
            $solicitud->manejador_id = $responsable->id;
            $solicitud->estado_id = $estado->id;
            $solicitud->save();

            //A cargo
            Monitorsolicitud::create([
                'solicitud_id' => $solicitud->id,
                'accion_id' => 15,
                'user_id'   => auth()->user()->id,
                'detalles' => $responsable->nombre
            ]);

            return back();
        }else{
            return back();
        }
    }

    //Asignar revisor a una solicitud
    public function asignarsupervisor(Request $request,$id,$supervisor){
    	$solicitud = Solicitud::find($id);
    	if ($solicitud) {
    		$solicitud->revisor_id = $supervisor;
    		$solicitud->save();
    		$supv = User::find($supervisor);
            Monitorsolicitud::create([
                'solicitud_id' => $solicitud->id,
                'accion_id' => 6,
                'user_id'   => auth()->user()->id,
                'detalles' => $supv->nombre
            ]);
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
    		$cat = Categoria::find($categoria);
            Monitorsolicitud::create([
                'solicitud_id' => $solicitud->id,
                'accion_id' => 11,
                'user_id'   => auth()->user()->id,
                'detalles' => 'cambió a categoría '. $cat->categoria
            ]);
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
    		$pri = Prioridad::find($prioridad);
            Monitorsolicitud::create([
                'solicitud_id' => $solicitud->id,
                'accion_id' => 4,
                'user_id'   => auth()->user()->id,
                'detalles' => 'cambió a prioridad '. $pri->prioridad
            ]);
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
                $num_nota = Notasolicitud::where(['solicitud_id'=>$solicitud->id,'eliminado'=>0])->count();
                Monitorsolicitud::create([
                    'solicitud_id' => $solicitud->id,
                    'notasolicitud_id' => $notasolicitud->id,
                    'accion_id' => 7,
                    'user_id'   => auth()->user()->id,
                    'detalles' => 'Nota # '.$num_nota.', con archivo adjunto '
                ]);
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
            $num_nota = Notasolicitud::where(['solicitud_id'=>$solicitud->id,'eliminado'=>0])->count();
            Monitorsolicitud::create([
                'solicitud_id' => $solicitud->id,
                'notasolicitud_id' => $notasolicitud->id,
                'accion_id' => 7,
                'user_id'   => auth()->user()->id,
                'detalles' => 'Nota # '.$num_nota
            ]);
            return back();
    	}
    }

    //Consulta ajax de contenido de una nota
    public function notasolicitud($id,$accion){
        $notasolicitud = Notasolicitud::find($id);
        dd($notasolicitud);
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
            $existeNotaEditada = Notaeditada::where('notasolicitud_id',$notasolicitud->id)->count();
            if ($existeNotaEditada == 0){
                Notaeditada::create([
                    'notasolicitud_id' => $notasolicitud->id,
                    'nota'  => $notasolicitud->nota,
                    'created_at' => $notasolicitud->created_at
                ]);
            }
            $monitor_detalle = Monitorsolicitud::where('notasolicitud_id',$notasolicitud->id)->first();
            $solicitud = $request->get('solicitud_id');
            $notasolicitud->nota = $request->get('edicion_nota');
            $notasolicitud->editada = true;
            $notasolicitud->ediciones = $notasolicitud->ediciones +1;
            $notasolicitud->save();

            Notaeditada::create([
                'notasolicitud_id' => $notasolicitud->id,
                'nota'  => $notasolicitud->nota
            ]);


            Monitorsolicitud::create([
                'solicitud_id' => $solicitud,
                'accion_id' => 8,
                'user_id'   => auth()->user()->id,
                'detalles' => $monitor_detalle->detalles. ' fue modificada'
            ]);
            return back();
        }
    }

    //Historial nota editada AJAX
    public function historialnotaeditada($nota_id){
        $notaseditadas = Notaeditada::where('notasolicitud_id',$nota_id)->orderBy('id','desc')->get();
        return view('control.historialnota',compact('notaseditadas'));
        //dd($notaseditadas);
    }

    //Marcar nota como privada o pública
    public function publicoprivado(Request $request,$notasolicitud_id,$solicitud){
        $notasolicitud = Notasolicitud::find($notasolicitud_id);
        if ($notasolicitud){
            $monitor_detalle = Monitorsolicitud::where('notasolicitud_id',$notasolicitud_id)->first();
            $notasolicitud->publico = !$notasolicitud->publico;
            $notasolicitud->save();
            if($notasolicitud->publico == 0){
                $estado = 'nota privada';
            }else{
                $estado = 'nota pública';
            }
            Monitorsolicitud::create([
                'solicitud_id' => $solicitud,
                'accion_id' => 8,
                'user_id'   => auth()->user()->id,
                'detalles' => $monitor_detalle->detalles. ' cambió a '.$estado
            ]);
            return back();
        }
    }

    //Eliminar nota de solicitud
    public function eliminarnotasolicitud(Request $request){
        $notasolicitud = Notasolicitud::find($request->get('nota_id'));
        if ($notasolicitud){
            $monitor_detalle = Monitorsolicitud::where('notasolicitud_id',$notasolicitud->id)->first();
            $solicitud = $request->get('solicitud_id');
            $notasolicitud->eliminado = true;
            $notasolicitud->save();

            Monitorsolicitud::create([
                'solicitud_id' => $solicitud,
                'accion_id' => 9,
                'user_id'   => auth()->user()->id,
                'detalles' => $monitor_detalle->detalles. ' fue eliminada'
            ]);

            return back();
        }
    }

    //Acciones perfil Estudiante
    public function estudiante(){
        $solicitudes = Solicitud::where('eliminada',false)
            ->where('responsable_id',auth()->user()->id)
            ->with(['user','responsable','revisor','estado','prioridad','categoria'])
            ->orderBy('id','asc')
            ->get();
        return view('control.inicio',compact('solicitudes'));
    }

    public function aceptarsolicitud(Request $request, $solicitud_id){
        //$usuario = User::find(auth()->user()->id);
        $solicitud = Solicitud::find($solicitud_id);
        Aceptarsolicitud::create([
            'user_id' => auth()->user()->id,
            'solicitud_id' => $solicitud_id
        ]);

        //En proceso
        $solicitud->estado_id = 3;
        $solicitud->save();

        //Modificación de estado
        $estado = Estado::find(3);
        Monitorsolicitud::create([
            'solicitud_id' => $solicitud->id,
            'accion_id' => 10,
            'user_id'   => auth()->user()->id,
            'detalles' => $estado->estado
        ]);

        return redirect()->route('versolicitud',$solicitud->id);
    }

    //Acciones perfil Tutor
    public function revisor(){
        $solicitudes = Solicitud::where('eliminada',false)
            ->where('revisor_id',auth()->user()->id)
            ->with(['user','responsable','revisor','estado','prioridad','categoria'])
            ->orderBy('id','asc')
            ->get();
        return view('control.inicio',compact('solicitudes'));
    }
}
