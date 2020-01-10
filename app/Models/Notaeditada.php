<?php

namespace Consultorio\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Notaeditada extends Model
{
    protected $fillable = ['notasolicitud_id','nota','fecha'];

    protected $dates = ['fecha'];

    public function notasolicitud()
    {
        return $this->belongsTo(Notasolicitud::class);
    }

    public function getFechaEdicionAttribute()
    {
        return new Date($this->fecha);
    }
}
