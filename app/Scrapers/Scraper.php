<?php

namespace App\Scrapers;

use App\Helpers\FileStorage;
use App\Models\Article;
use App\Models\Category;
use App\Models\External;
use App\Models\Source;
use Goutte\Client;
use Illuminate\Support\Str;
use Symfony\Component\HttpClient\HttpClient;
use function Sodium\compare;

class Scraper
{
    protected string $url;
    protected array $boxSelectors;
    protected array $titleSelectors;
    protected array $imageSelectors;
    protected array $urlSelectors;
    protected string $contentSelector;
    protected string $imageLinkAttribute;
    protected bool $hasLocalUrls = false;
    protected bool $hasLocalImageUrls = false;
    protected bool $hasSmallImages = false;
    protected string $bigImageSelector;
    protected bool $saveImagesLocally = false;
    protected int $sleepTimePerArticle = 0;
    protected string $categorySelector;
    protected array $categoryAssign;
    protected bool $hasUrlCategory = false;
    protected bool $hasExternalSource = false;
    protected string $externalSource;


    private Client $client;

    public function __construct()
    {
        $this->client = new Client(HttpClient::create(['verify_peer' => false, 'verify_host' => false]));
    }

    public function scrape(Source $source) {
        $page = $this->client->request('GET', $this->url);


        foreach ($this->boxSelectors as $i => $boxSelector) {
            $page->filter($boxSelector)->each(function ($node) use ($source, $i) {
                $title = $node->filter($this->titleSelectors[$i])->count() ?
                    $node->filter($this->titleSelectors[$i])->text() :
                    null;

                $image_url = $node->filter($this->imageSelectors[$i])->count() ?
                    $node->filter($this->imageSelectors[$i])->getNode(0)->getAttribute($this->imageLinkAttribute) :
                    null;

                $link = $node->filter($this->urlSelectors[$i])->count() ?
                    $node->filter($this->urlSelectors[$i])->getNode(0)->getAttribute('href'):
                    null;

                if (!$title || !$image_url || !$link) { return; }
                if ((new Article())->existsWithLink($link)) { return; }

                $source_id = $source->id;

                if($this->saveImagesLocally) {
                    $image_url = (new FileStorage())->fileStorage($image_url);
                }

                if($this->hasLocalUrls) {
                    $link = $this->url . $link;
                }

                if($this->hasLocalImageUrls) {
                    $image_url = $this->url . $image_url;
                }

                $slug = Str::slug($title);

                $article = (new Article())->create(compact('title', 'image_url', 'link', 'source_id', 'slug'));

                $this->scrapeContent($article);
            });
        }
    }

    public function scrapeContent(Article $article): Article
    {
        if ($this->sleepTimePerArticle) {
            sleep($this->sleepTimePerArticle);
        }


        $page = $this->client->request('GET', $article->link);

        $page->filter($this->externalSource)->each(function ($node) use ($article) {
            $external_source = $node->getNode(0)->getAttribute('src');
            if(!$external_source) {
                return;
            }

            $new_external_source = (new External())->create([
                'external_source' => $external_source,
                'article_id' => $article -> id
            ]);

            $new_external_source->save();

        });

        $texts = '';

        $category = $page->filter($this->categorySelector)->text();


        $article->category_id = $this->categoryAssign[$category] ?? 10;

        $page->filter($this->contentSelector)->each(function ($node) use (&$texts){
            $texts .=$node->text() . "\n";

        });

        if($this->hasSmallImages) {
            $image_url = $page->filter($this->bigImageSelector)->count() ?
                $page->filter($this->bigImageSelector)->getNode(0)->getAttribute($this->imageLinkAttribute) :
                null;

            if($image_url) {
                if($this->saveImagesLocally) {
                    $image_url = (new FileStorage())->fileStorage($image_url);
                }
                $article->image_url = $image_url;
            }
        }

        $article->text = trim($texts);

        $article->save();

        return $article;
    }


}
