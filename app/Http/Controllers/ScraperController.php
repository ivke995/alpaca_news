<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Proxy;
use App\Models\Source;
use App\Scrapers\ProxyScrapper;
use Illuminate\Support\Facades\DB;
use Jorenvh\Share\Share;

//use http\Env\Request;

class ScraperController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        $sources = Source::all();

        return view('index', compact('sources', 'articles'));
    }

    public function show(string $slug)
    {
        $articles = Article::all()->where('slug', '!==', $slug)->random(5);
        $article = Article::where('slug', $slug)->first();
        $source_small_articles = Article::all()->where('source_id', $article->source_id)->where('slug', '!==', $slug)->random(5);
        $sources = Source::all();
        $page = url()->current();

        if (!$article) {
            return redirect()->route('index');
        }

        $article->visits++;
        $article->save();

        return view('show', compact('article', 'sources', 'articles', 'source_small_articles', 'page'));
    }

    public function category(int $id)
    {
        $category = Category::find($id);
        $sources = Source::all();

        if (!$category) {
            return redirect()->route('index');
        }

        return view('index', compact('sources', 'category'));
    }

    public function source(int $id)
    {
        $source = Source::find($id);
        $articles = Article::all();

        if (!$source) {
            return redirect()->route('index');
        }
        return view('source', compact('source', 'articles'));
    }

}
