<?php

namespace Consultorio\Models;

use Illuminate\Database\Eloquent\Model;

class Prioridad extends Model
{
	protected $fillable = ['prioridad','tiempo'];
    public $timestamps = false;
}
