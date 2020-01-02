<?php

namespace Consultorio\Policies;

use Consultorio\Models\Solicitud;
use Consultorio\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SolicitudPolicy
{
    use HandlesAuthorization;

    public function versolicitud($user, Solicitud $solicitud) {
        return  $user->id == $solicitud->user_id ||
                $user->id == $solicitud->responsable_id ||
                $user->id == $solicitud->revisor_id ||
                $user->id == 1;
    }
}
