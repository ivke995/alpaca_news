<?php

namespace App\Scrapers;

class Nezavisne extends Scraper
{
    protected string $url = 'https://nezavisne.com/';
    protected array $boxSelectors = ['.thumbnail-naslovna', '.thumbnail.thumbnail-top.clearfix', '.col-lg-6 > .thumbnail', '.media.clearfix'];
    protected array $urlSelectors = ['a', 'a', 'h4 > a', 'h4 > a'];
    protected array $imageSelectors = ['img.thumbnail-naslovna-img', 'img', 'img', '.media-left img'];
    protected array $titleSelectors = ['.thumbnail-naslovna-h2 > a', '.kutija-desno a', 'h4 > a', '.media-heading > a'];
    protected string $contentSelector = '.col-lg-10 p';
    protected string $imageLinkAttribute = 'src';
    protected bool $hasSmallImages = true;
    protected string $bigImageSelector = '.img-fluid.img-responsive';
    protected bool $saveImagesLocally = true;
}
