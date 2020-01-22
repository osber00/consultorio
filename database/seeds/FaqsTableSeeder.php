<?php

use Illuminate\Database\Seeder;
use Consultorio\Models\Faq;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Faq::class,200)->create();
    }
}
