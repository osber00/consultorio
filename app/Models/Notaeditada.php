<?php

namespace Consultorio\Models;

use Illuminate\Database\Eloquent\Model;

class Notaeditada extends Model
{
    protected $fillable = ['notasolicitud_id','nota'];

    public function notasolicitud()
    {
        return $this->belongsTo(Notasolicitud::class);
    }
}
