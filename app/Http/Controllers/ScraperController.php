<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Source;

class ScraperController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        $sources = Source::all();

        return view('index', compact('sources', 'articles'));
    }

    public function show(int $id)
    {
        $articles = Article::limit(5)->get();
        $article = Article::findOrFail($id);

        return view('show', compact('article', 'articles'));
    }


}
