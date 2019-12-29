<?php

namespace Consultorio\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Monitorsolicitud extends Model
{
    protected $fillable = ['solicitud_id','notasolicitud_id','user_id','accion_id','detalles'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function accion(){
        return $this->belongsTo(Accion::class);
    }

    public function getFechaAttribute()
    {
        return new Date($this->created_at);
    }
}
