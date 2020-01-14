<?php

namespace Consultorio\Http\Controllers;

use Illuminate\Http\Request;
use Consultorio\Models\Noticia;
use Illuminate\Contracts\Auth\Guard;
use Consultorio\Http\requests\NoticiaStoreRequest;
use Illuminate\Support\Facades\Storage;



class NoticiaController extends Controller
{

    // function __construct(Guard $guard){
    //     $this->auth = $guard;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias= Noticia::orderBy('id','DESC')
        ->paginate();
        
        return view('control.noticias.index',compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('control.noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticiaStoreRequest $request)
    {
        $noticia= Noticia::create($request->all());

       //Imagen

       if($request->file('file')){
            $path= Storage::disk('public')->put('image',$request->file('file'));
            $noticia->fill(['file'=>asset($path)])->save();
       }

       //etiquetas
       

       return redirect()->route('noticias.index')
        ->with('info','Noticia creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia= Noticia::find($id);
        
        return view('control.noticias.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
