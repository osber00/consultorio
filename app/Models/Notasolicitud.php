<?php

namespace Consultorio\Models;

use Illuminate\Database\Eloquent\Model;

class Notasolicitud extends Model
{
    protected $fillable = ['nota','archivo','user_id','solicitud_id','publico'];

    public function getUrlPathAttribute(){
    	return \Storage::url($this->archivo);
    }
}
