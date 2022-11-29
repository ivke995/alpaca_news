<?php

namespace App\Console\Commands;

use App\Scrapers\ProxyScrapper;
use Illuminate\Console\Command;

class ProxyScraper extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'proxies:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To get proxies from free resources';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Starting fetch for free proxies...');

        return (new ProxyScrapper())->scrapeProxy();

    }
}
