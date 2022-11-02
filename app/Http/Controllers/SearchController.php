<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $searchText = $request->query('query');
        $articles = Article::where('title', 'LIKE', '%'.$searchText.'%')->get();

        return view('search', compact('articles'));
    }

}
