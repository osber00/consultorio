<?php

namespace Consultorio\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
