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

        if(!$searchText) {
            return redirect()->route('index')->with('message', 'Please enter text you search for');
        }

        if(!$articles) {
            return redirect()->route('index')->with('message', 'No articles found!');
        }


        return view('search', compact('articles'));
    }

}
