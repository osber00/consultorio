<?php

namespace Consultorio\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $fillable = ['titulo','descripcion','user_id','responsable_id','estado_id','prioridad_id','categoria_id'];
}
