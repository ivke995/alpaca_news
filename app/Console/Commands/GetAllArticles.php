<?php

namespace App\Console\Commands;

use App\Models\Source;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GetAllArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'articles:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Goes through all sources and triggers artisan command to fetch articles for that source';

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
        $this->info('Starting fetch for all sources...');
        $sources = (new Source())->all();

        foreach ($sources as $i => $source) {
            $this->info('[' . ($i + 1) . '/' . $sources->count() . '] Starting fetch for ' . $source->name);
            Artisan::call('articles:get', ['sourceID' => $source->id]);
        }

        return 0;
    }
}
