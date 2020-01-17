<?php

use Faker\Generator as Faker;
use Consultorio\Models\Faq;

$factory->define(Faq::class, function (Faker $faker) {
    $title=$faker->sentence(4);
   
    return [
    	'user_id'=>'1',
    	'category_id'=>rand(1,7),
    	'pregunta'=>$faker->sentence(8),
        'titulo_caso'=>$title,
        'slug'=>str_slug($title),
        'descripcion_caso'=>$faker->text(550),
        'que_hacer'=>$faker->text(500),
        'donde_acudir'=>$faker->text(500),
        'alternativa'=>$faker->text(500),
        'tener_cuenta'=>$faker->text(500),
        'status'=>$faker->randomElement(['DRAFT','PUBLISHED']),
        
    ];
});


