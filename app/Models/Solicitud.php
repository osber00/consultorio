<?php

namespace Consultorio\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Solicitud extends Model
{
    protected $fillable = ['titulo','descripcion','user_id','responsable_id','supervisor_id','estado_id','prioridad_id','categoria_id'];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function revisor(){
        return $this->belongsTo(User::class);
    }

    public function responsable(){
    	return $this->belongsTo(User::class);
    }

    public function estado(){
    	return $this->belongsTo(Estado::class);
    }

    public function prioridad(){
    	return $this->belongsTo(Prioridad::class);
    }

    public function categoria(){
    	return $this->belongsTo(Categoria::class);
    }

    public function getFechaAttribute()
    {
        return new Date($this->created_at);
    }
}
