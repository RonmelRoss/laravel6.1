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

    public function store()
    {
        // die("hello");
        // dump(request()->all());
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }

    public function show($id)
    {
        
        $article = Article::find($id);
        //dd($article);

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }
}
