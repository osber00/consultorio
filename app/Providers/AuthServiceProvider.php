<?php

namespace Consultorio\Providers;

use Consultorio\Models\Notasolicitud;
use Consultorio\Policies\NotasolicitudPolicy;
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

        //
    }
}
