<?php

namespace App\Scrapers;

use App\Models\Source;

class RTRS extends Scraper
{
    protected string $url = 'https://www.rtrs.tv/';
    protected array $boxSelectors = ['.col-md-6.col-sm-6.glavna-vijest-mala.naslovna-prve-dvije', '.col-md-4.col-sm-4.glavna-vijest-mala.naslovna-druge-tri', '.glavna-vijest-mala.glavna-slika-fix'];
    protected array $urlSelectors = ['a', 'a', 'a'];
    protected array $imageSelectors = ['.naslovna-foto img', '.naslovna-foto img', 'img'];
    protected array $titleSelectors = ['.glavna-naslov h1', '.glavna-naslov h1', '.glavna-naslov h2'];
    protected string $contentSelector = '.nwzbody p';
    protected string $imageLinkAttribute = 'src';
    protected bool $hasLocalUrls = true;
    protected bool $hasLocalImageUrls = true;
    protected string $categorySelector = '.sel';
    protected array $categoryAssign = [
        'Република Српска' => 1,
        'Спорт' => 3,
        'БиХ' => 1,
        'Србија' => 1,
        'Регион' => 1,
        'Свијет' => 1,
        'Хроника' => 1,
        'Привреда' => 4,
        'Култура' => 5,
        'Друштво' => 7,
        'Вријеме' => 1,
        'Вијести' => 1
    ];


}
