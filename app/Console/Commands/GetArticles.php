<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\Source;
use Illuminate\Console\Command;

class GetArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'articles:get {sourceID}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To get all articles for given source';

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
     * @return void
     */
    public function handle()
    {
        $source = (new Source())->find($this->argument('sourceID'));

        $source->scraper()->scrape($source);

    }
}
