<?php

namespace Consultorio\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Notasolicitud extends Model
{
    protected $fillable = ['nota','archivo','user_id','solicitud_id','publico','eliminado','editada','ediciones'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getUrlPathAttribute(){
    	return \Storage::url($this->archivo);
    }

    public function getFechaAttribute()
    {
        return new Date($this->created_at);
    }


}
