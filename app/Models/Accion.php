<?php

namespace Consultorio\Models;

use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    protected $fillable = ['accion','notificable'];

    public $timestamps = false;

}
