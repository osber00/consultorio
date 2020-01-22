<?php

namespace Consultorio\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model


{
    protected $fillable=[
            'user_id','category_id','pregunta','titulo_caso','slug','descripcion_caso','que_hacer','donde_acudir','alternativa','tener_cuenta','status',
        ];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'category_id');
    }


    public function scopeCategory_id ($query, $category_id){

    	if($category_id)
    		return $query->where('category_id', 'LIKE',"%$category_id");
    }

    public function scopeFaq ($query, $faq){
    	if($faq)
    		return $query
    			->where('pregunta', 'LIKE',"%$faq%")
    			->orWhere('titulo_caso', 'LIKE',"%$faq%")
    			->orWhere('descripcion_caso', 'LIKE',"%$faq%")
    			->orWhere('que_hacer', 'LIKE',"%$faq%")
    			->orWhere('donde_acudir', 'LIKE',"%$faq%")
    			->orWhere('alternativa', 'LIKE',"%$faq%")
    			->orWhere('tener_cuenta', 'LIKE',"%$faq%");
    }
}
