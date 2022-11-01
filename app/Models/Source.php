<?php

namespace App\Models;

use App\Scrapers\Scraper;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @mixin Builder
 */
class Source extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'link_logo', 'path_scraper'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function scraper(): ?Scraper
    {

        if(class_exists($this->path_scraper)) {
            $scraper = $this->path_scraper;
            return new $scraper();
        }
        return null;
    }
}
