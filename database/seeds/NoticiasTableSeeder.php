<?php

use Illuminate\Database\Seeder;
use Consultorio\Models\Noticia;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Noticia::class,8)->create();
    }
}
