<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DatosTestSeeder::class);
        $this->call(NoticiasTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
    }
}
