<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
           ['name' => 'vijesti'],
           ['name' => 'politika'],
           ['name' => 'sport'],
           ['name' => 'ekonomija'],
           ['name' => 'kultura'],
           ['name' => 'auto-moto'],
           ['name' => 'život i stil'],
           ['name' => 'nauka'],
           ['name' => 'magazin'],
           ['name' => 'ostalo']
        ]);



    }
}
