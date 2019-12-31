<?php

namespace Consultorio\Providers;

use Consultorio\Models\Notasolicitud;
use Consultorio\Models\User;
use Consultorio\Policies\NotasolicitudPolicy;
use Consultorio\Policies\UsuriorolPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'Consultorio\Model' => 'Consultorio\Policies\ModelPolicy',
        Notasolicitud::class => NotasolicitudPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isadmin',function ($user){
            return $user->rol_id == 1;
        });

        Gate::define('istutor',function ($user){
            return $user->rol_id == 2;
        });

        Gate::define('isestudiante',function ($user){
            return $user->rol_id == 3;
        });


    }
}
