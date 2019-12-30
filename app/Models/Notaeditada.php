<?php

namespace Consultorio\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Notaeditada extends Model
{
    protected $fillable = ['notasolicitud_id','nota'];

    public function notasolicitud()
    {
        return $this->belongsTo(Notasolicitud::class);
    }

    public function getFechaAttribute()
    {
        return new Date($this->created_at);
    }
}
