<?php

namespace Consultorio\Policies;

use Consultorio\Models\User;
use Consultorio\Models\Notasolicitud;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotasolicitudPolicy
{
    use HandlesAuthorization;

    public function editar($user, Notasolicitud $notasolicitud){
        return $user->id == $notasolicitud->user_id;
    }
}
