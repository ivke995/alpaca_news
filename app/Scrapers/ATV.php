<?php

namespace App\Scrapers;

use App\Models\Source;

class ATV extends Scraper
{
    protected string $url = 'https://www.atvbl.rs/';
    protected array $boxSelectors = ['.headline-news', '.col-6.col-lg-3.p-2'];
    protected array $urlSelectors = ['a', 'a'];
    protected array $imageSelectors = ['.article-picture img', '.article-picture img'];
    protected array $titleSelectors = ['.article-content > .article-title', '.article-content > .article-title'];
    protected string $contentSelector = '.article-content p';
    protected string $imageLinkAttribute = 'src';
}
