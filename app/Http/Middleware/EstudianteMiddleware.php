<?php

namespace Consultorio\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class EstudianteMiddleware
{
    protected $auth;

    function __construct(Guard $guard) {
        $this->auth = $guard;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()){
            return redirect()->route('login');
        }else{
            if ($this->auth->user()->rol_id != 3){
                $this->auth->logout();
                return redirect()->route('login');
            }
        }

        return $next($request);
    }
}
