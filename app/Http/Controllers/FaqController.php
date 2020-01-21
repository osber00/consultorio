<?php

namespace Consultorio\Http\Controllers;

use Illuminate\Http\Request;
use Consultorio\Models\Faq;
use Consultorio\Models\Categoria;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categorias= Categoria::orderBy('id','ASC')->pluck('categoria', 'id');    
        $category_id = $request->get('category_id');
        $faqs= Faq::orderBy('id','DESC')
        ->category_id($category_id)
        ->paginate(50);
        
        return view('control.faqs.index',compact('faqs','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias= Categoria::orderBy('id','ASC')->pluck('categoria', 'id');
        return view('control.faqs.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Faq::create($request->all());
       
       return redirect()->route('faqs.index')
        ->with('info','Faq creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $faq= Faq::find($id);
        
        return view('control.faqs.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias= Categoria::orderBy('id','ASC')->pluck('categoria', 'id');
        $faq= Faq::find($id);
        return view('control.faqs.edit', compact('faq','categorias'));
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
        $faq= Faq::find($id);
         
         $faq->fill($request->all())->save();

         return redirect()->route('faqs.edit',$faq->id)
            ->with('info','Faq actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq= Faq::find($id);
        
        $faq->delete();
        return back()->with('info','Faq Eliminada');
    }
}
