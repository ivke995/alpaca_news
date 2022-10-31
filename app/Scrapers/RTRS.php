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


}
