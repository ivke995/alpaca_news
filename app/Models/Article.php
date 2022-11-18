<?php

namespace App\Models;

use App\Helpers\AlphabetConverter;
use Goutte\Client;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 * @property $link
 * @property $firstParagraph
 * @property $restOfText
 */
class Article extends Model
{
    use HasFactory;

    protected $fillable = ['source_id', 'category_id', 'link', 'image_url', 'title', 'text', 'slug', 'external_source'];

    public static function boot()
    {
        parent::boot();

        self::creating(function (Article $article) {
            $article->link = self::processLink($article->link);
        });

        self::updating(function (Article $article) {
            $article->text = (new AlphabetConverter())->cyrillicToLatin($article->text);
            $article->title = (new AlphabetConverter())->cyrillicToLatin($article->title);
        });

    }

    public static function processLink(string $link): string
    {
        $link = preg_replace('/(?<!:)\/\//', '/', $link);
        $link = ltrim($link, '/');

        if (strpos($link, 'https://') === false) {
            $link = 'https://' . $link;
        }

        return $link;
    }

    public function source()
    {
        return $this->belongsTo(Source::class);
    }

    public function checkSlugExists()
    {
        $previous_url_arr = explode('/', url()->previous());
        return end($previous_url_arr);

    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function externals()
    {
        return $this->hasMany(External::class);
    }

    public function existsWithLink(string $link): bool
    {
        $link = self::processLink($link);

        return (new Article())->where('link', $link)->exists();
    }

    public function getFirstParagraphAttribute(): string
    {
        return explode("\n", $this->text)[0];
    }

    public function getRestOfTextAttribute(): string
    {
        return explode("\n", $this->text, 2)[1];
    }


}
