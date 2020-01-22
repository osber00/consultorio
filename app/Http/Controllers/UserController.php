<?php

namespace Consultorio\Http\Controllers;

use Illuminate\Http\Request;
use Consultorio\Models\User;

class UserController extends Controller
{
    public function nuevousuario(Request $request){
    	$rules = [
    		'nombre'=> 'required|min:5|max:70',
    		'identificacion'=> 'required|unique|max:10',
    		'email'=> 'required|email|unique|max:70',
    		'telefono'=> 'required|unique|min:5|max:10'
    	];

    	$this->validate($request,$rules);

    	$usuario = new User();
    	$usuario->nombre = $request->get('nombre');
    	$usuario->identificacion = $request->get('identificacion');
    	$usuario->email = $request->get('email');
    	$usuario->password = bcrypt($request->get('identificacion'));
    	$usuario->telefono = $request->get('telefono');
    	$usuario->rol_id = 3;
    	$usuario->activo = true;
    	$usuario->save();

    	$request->session()->flash('nuevousuario',$usuario->nombre);

    	return redirect()->route('adminestudiantes');
    }
}
