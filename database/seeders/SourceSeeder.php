<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->truncate();

        DB::table('sources')->insert([
            ['name' => 'BN', 'link_logo' => 'https://www.rtvbn.com/storage/settings/res_1650870699_logo.png', 'path_scraper' => '\App\Scrapers\BN'],
            ['name' => 'ATV', 'link_logo' => 'https://www.atvbl.rs/images/site/logo.svg', 'path_scraper' => '\App\Scrapers\ATV'],
            ['name' => 'Nezavisne', 'link_logo' => 'https://cdns.nezavisne.rs/os/Nezavisne_novine_logo_25.png', 'path_scraper' => '\App\Scrapers\Nezavisne'],
            ['name' => 'RTRS', 'link_logo' => 'https://www.rtrs.tv/_bmp/logo-127x37.png', 'path_scraper' => '\App\Scrapers\RTRS'],
            ['name' => 'Klix', 'link_logo' => 'https://static.klix.ba/images/og/klix_og.jpg', 'path_scraper' => '\App\Scrapers\Klix']

        ]);
    }
}
