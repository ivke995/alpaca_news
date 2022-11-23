<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Source;
//use http\Env\Request;

class ScraperController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        $sources = Source::all();

        return view('index', compact('sources',  'articles'));
    }

    public function show(string $slug)
    {
        $articles = Article::all()->random(5)->where('slug', '!==', $slug);
        $article = Article::where('slug', $slug)->first();
        $source_small_articles = Article::all()->random(5)->where('source_id', $article->source_id)->where('slug', '!==', $slug);
        $sources = Source::all();
//        $previous_url_arr = explode('/', url()->previous());
//        $lastElement = end($previous_url_arr);
//        $lastElement = (new Article())->checkSlugExists();
//        $lastElement = Article::checkSlugExists();
        if(!$article) {
            return redirect()->route('index');
        }

        $article->visits++;
        $article->save();

        return view('show', compact('article', 'sources', 'articles', 'source_small_articles'));
    }

    public function category(int $id)
    {
        $category = Category::find($id);
        $sources = Source::all();

        if(!$category) {
            return redirect()->route('index');
        }

        return view('index', compact( 'sources', 'category'));
    }

    public function source(int $id)
    {
        $source = Source::find($id);
        $articles = Article::all();

        if(!$source) {
            return redirect()->route('index');
        }
        return view('source', compact('source', 'articles'));
    }

}
