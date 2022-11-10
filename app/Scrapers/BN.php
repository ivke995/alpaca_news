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
    protected bool $saveImagesLocally = true;
    protected string $categorySelector = '.news-detail-txt > strong';
    protected string $externalSource = '.news-detail-txt img';
    protected array $categoryAssign = [
        'Fudbal' => 3,
        'Kosarka' => 3,
        'Tenis' => 3,
        'Ostali sportovi' => 3,
        'Republika Srpska' => 1,
        'Bosna i Hercegovina' => 1,
        'Srbija' => 1,
        'Svijet' => 1,
        'Region' => 1,
        'Vijesti' => 1,
        'Zdravlje' => 7,
        'Moda i ljepota' => 7,
        'Putovanja' => 7,
        'Zanimljivosti' => 7,
        'Zabava' => 9
    ];


}



