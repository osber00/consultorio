<?php

namespace Consultorio\Http\Controllers\Auth;

use Consultorio\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        /*if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }*/

        if (auth()->user()->rol_id == '1') {
            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/control';
        }else if (auth()->user()->rol_id == '2') {
            return property_exists($this, 'redirectTo') ? $this->redirectTo : 'control/revisor';
        }else if (auth()->user()->rol_id == '3') {
            return property_exists($this, 'redirectTo') ? $this->redirectTo : 'control/estudiante';
        }

        //Usuario cliente
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }

    /**
     * Estado activo para acceder al sistema
     */
    protected function credentials(Request $request)
    {
        $request['activo'] = 1;
        return $request->only($this->username(), 'password', 'activo');
    }

    /**
     * Campo habilitado para acceder al sistema "Identificacion"
     *
     */
    public function username()
    {
        return 'identificacion';
    }



}
