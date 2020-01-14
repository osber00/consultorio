<?php

namespace Consultorio\models;

use Illuminate\Database\Eloquent\Model;

class noticia extends Model
{
    protected $fillable=[
		'user_id','name','slug','excerpt','body','status','file'
	];
}
