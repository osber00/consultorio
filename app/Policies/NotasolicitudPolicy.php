<?php

namespace Consultorio\Policies;

use Consultorio\Models\User;
use Consultorio\Models\Notasolicitud;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotasolicitudPolicy
{
    use HandlesAuthorization;

    //Política de editar solo el propietario de la nota
    public function editar($user, Notasolicitud $notasolicitud){
        return $user->id == $notasolicitud->user_id;
    }
}
