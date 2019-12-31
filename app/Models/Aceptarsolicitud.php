<?php

namespace Consultorio\Models;

use Illuminate\Database\Eloquent\Model;

class Aceptarsolicitud extends Model
{
    protected $fillable = ['user_id','solicitud_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function solicitud(){
        return $this->belongsTo(Solicitud::class);
    }
}
