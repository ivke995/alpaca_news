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
    protected string $categorySelector = '.breadcrumb > li:nth-of-type(3)';
    protected string $externalSource = '.nwzbody > img';
    protected array $categoryAssign = [
        'Republika Srpska' => 1,
        'Hronika' => 1,
        'Društvo' => 1,
        'Region' => 1,
        'Svijet' => 1,
        'Banja Luka' => 1,
        'Srbija' => 1,
        'Emisije' => 1,
        'Narod priča' => 1,
        'BiH' => 1,
        'Izbori 2022' => 2,
        'Kultura' => 5,
        'Scena' => 9,
        'Nauka i tehnologija' => 8,
        'Ljubav i seks' => 7,
        'Zdravlje' => 7,
        'Stil' => 7,
        'Zanimljivosti' => 9,
        'Savjeti' => 9,
        'Vicevi' => 9,
        'Auto-moto' => 6,
        'Porodica' => 7,
        'Fudbal' => 3,
        'Košarka' => 3,
        'Tenis' => 3,
        'Ostali sportovi' => 3,
        'Ekonomija' => 4,
    ];
}
