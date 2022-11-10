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
    protected string $categorySelector = '.container > .row > .col-lg-12 h4';
    protected string $externalSource = '.vijestTijelo > img';
    protected array $categoryAssign = [
        'Svijet' => 1,
        'BiH' => 1,
        'Gradovi' => 1,
        'Društvo' => 1,
        'Obrazovanje' => 8,
        'Ex -Yu' => 1,
        'Hronika' => 1,
        'Banja Luka' => 1,
        'Intervju' => 1,
        'Kolumne' => 1,
        'Nezavisni stav' => 1,
        'Fudbal' => 3,
        'Košarka' => 3,
        'Rukomet' => 3,
        'Tenis' => 3,
        'Atletika' => 3,
        'Zimski sportovi' => 3,
        'Sportovi na vodi' => 3,
        'Ostali sportovi' => 3,
        'eSport i igrice' => 3,
        'Privreda' => 4,
        'Tržište' => 4,
        'Analize' => 4,
        'Agrar' => 4,
        'Muzika' => 5,
        'Pozornica' => 5,
        'Književnost' => 5,
        'Vizuelna umjetnost' => 5,
        'Film i serije' => 5,
        'Zdravlje' => 7,
        'Život' => 7,
        'Ljepota' => 7,
        'Hrana i piće' => 7,
        'Kuće i vrt' => 7,
        'Putovanje' => 7,
        'Svijet životinja' => 7,
        'Recept' => 7,
        'Jet set' => 9,
        'Ljubav i seks' => 9,
        'Muški kutak' => 9,
        'Zanimljivosti' => 9,
        'TV' => 9,
        'Žuta hronika' => 9,
        'Novosti' => 6,
        'Auto zanimljivosti' => 6,
        'Mogućnosti' => 6,
        'Moto sport' => 6,
        'Nauka' => 8,
        'Svemir' => 8,
        'Okolina' => 8,
        'Internet' => 8,
        'Naoružanje' => 8,
        'Istorija' => 8,
        'Hardware' => 8,
        'Programi' => 8,
        'Gadgets' => 8
        ];
}
