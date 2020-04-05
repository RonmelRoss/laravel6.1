<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['article' => $articles]);
    }
    public function show($id)
    {
        
        $article = Article::find($id);
        //dd($article);

        return view('articles.show', ['article' => $article]);
    }
}
