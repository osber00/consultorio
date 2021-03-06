<?php
namespace Consultorio\Http\Controllers;
use Consultorio\Models\Monitorsolicitud;
use Illuminate\Http\Request;
use Consultorio\Models\Solicitud;
use Consultorio\Models\Notasolicitud;
use Consultorio\Models\Noticia;
use Consultorio\Models\Faq;
use Consultorio\Models\Categoria;
use Auth;
class FrontController extends Controller
{
    public function home(){

        $noticias= Noticia::orderBy('id','DESC')->where('status','PUBLISHED')->limit(4)->get();
      
        return view ('front.home', compact('noticias'));
    }

    public function noticia($slug){

        $noticia=noticia::where('slug', $slug)->first();
        return view('front.noticia', compact('noticia'));
    }

    public function categoria($id){

        $categoria=Categoria::where('id',$id)->first();
        $faqs=Faq::orderBy('id','ASC')->where('status','PUBLISHED')->where('category_id',$id)->get();

       // dd($categoria->categoria);

       return view ('front.categorias',compact('faqs','categoria'));
    }

    public function faq($slug){

        $faq= Faq::where('slug',$slug)->first();

        return view ('front.faq',compact('faq'));
    }

    public function buscador(Request $request){

        if ($faq= $request->get('faq'))

        $items=Faq::orderBy('id','DESC')
            ->where('status','PUBLISHED')
            ->faq($faq)
            ->paginate(50);   

        else($items=0);

        return view ('front.buscador',compact('items'));



    }

    public function inicio(){
        if(auth()->user()){
            $solicitudes =  Solicitud::
            where(['user_id'=>Auth::user()->id,'eliminada'=>0])
                ->with(['responsable','estado','prioridad','categoria'])
                ->get();
        }else{
            $solicitudes = null;
        }
    	return view('front.inicio',compact('solicitudes'));
    }
    public function solicitud(Request $request){
    	//dd($request->all());
        $rules = [
            'titulo' => 'required|min:5|max:200',
            'descripcion'=> 'required|min:15|max:600'
        ];
        $this->validate($request,$rules);
    	$solicitud = new Solicitud();
    	$solicitud->titulo = $request->get('titulo');
    	$solicitud->descripcion = $request->get('descripcion');
    	$solicitud->user_id = Auth::user()->id;
    	$solicitud->responsable_id = 1;
        $solicitud->manejador_id = 1;
    	$solicitud->estado_id = 1;
    	$solicitud->prioridad_id = 6;
    	$solicitud->categoria_id = 1;
    	$solicitud->save();
        Monitorsolicitud::create([
            'solicitud_id' => $solicitud->id,
            'accion_id' => 1,
            'user_id'   => auth()->user()->id
        ]);
        Monitorsolicitud::create([
            'solicitud_id' => $solicitud->id,
            'accion_id' => 2,
            'user_id'   => 2,
            'detalles' => 'Nueva'
        ]);
        Monitorsolicitud::create([
            'solicitud_id' => $solicitud->id,
            'accion_id' => 15,
            'user_id'   => 2,
            'detalles' => 'Consultorio virtual'
        ]);
    	$request->flash('paso2','Adjuntar documentos');
    	return redirect()->route('documentos',$solicitud->id);
    }
    public function documentos($solicitud_id){
        $solicitud = Solicitud::find($solicitud_id);
        $notasolicitud = Notasolicitud::where(['user_id'=>Auth::user()->id,'solicitud_id'=>$solicitud->id])->get();
        return view('front.documentos',compact('solicitud','notasolicitud'));
    }
    public function adjuntardocumentos(Request $request){
        $rule = [
            'nota' => 'required|min:5|max:220'
        ];
        $this->validate($request,$rule);
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
                $num_nota = Notasolicitud::where(['solicitud_id'=>$solicitud->id,'eliminado'=>0])->count();
                Monitorsolicitud::create([
                    'solicitud_id' => $solicitud->id,
                    'notasolicitud_id' => $notasolicitud->id,
                    'accion_id' => 7,
                    'user_id'   => auth()->user()->id,
                    'detalles' => 'Nota # '.$num_nota.', con archivo adjunto'
                ]);
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