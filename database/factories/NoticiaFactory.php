<?php

use Faker\Generator as Faker;
use Consultorio\Models\Noticia;

$factory->define(Noticia::class, function (Faker $faker) {
   $title=$faker->sentence(2);
    return [
    	'user_id'=>'1',
    	'name'=>$title,
        'slug'=>str_slug($title),
        'excerpt'=>$faker->text(150),
        'body'=>$faker->text(500),
        'status'=>$faker->randomElement(['DRAFT','PUBLISHED']),
        'file'=>$faker->imageUrl($width=600, $height=400),
    ];
});