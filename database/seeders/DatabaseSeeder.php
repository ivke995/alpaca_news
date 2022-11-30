<?php

namespace Database\Seeders;

use App\Models\Source;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        (new SourceSeeder())->run();
        (new CategorySeeder())->run();
        (new CountriesSeeder())->run();
    }
}
