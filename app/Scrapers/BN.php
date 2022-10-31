<?php

namespace App\Scrapers;

use App\Models\Source;

class BN extends Scraper
{
    protected string $url = 'https://www.rtvbn.com/';
    protected array $boxSelectors = ['.content > .container > .row > .col-md-6 > .main-content > .tab-content > #tab1 > .news-article'];
    protected array $urlSelectors = ['.showNewsDetail'];
    protected array $imageSelectors = ['.showNewsDetail > .img-responsive'];
    protected array $titleSelectors = ['.news-txt > h2 > .showNewsDetail'];
    protected string $contentSelector = '.txt';
    protected string $imageLinkAttribute = 'data-src';
}



