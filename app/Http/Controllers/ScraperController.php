<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Source;

class ScraperController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        $sources = Source::all();
//        $source_selector = Source::find($id);


        return view('index', compact('sources',  'articles'));
    }

    public function show(string $slug)
    {
        $articles = Article::all()->random(5)->where('slug', '!==', $slug);
        $article = Article::where('slug', $slug)->first();

        if(!$article) {
            return redirect()->route('index');
        }

        $article->visits++;
        $article->save();

        return view('show', compact('article', 'articles'));
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
