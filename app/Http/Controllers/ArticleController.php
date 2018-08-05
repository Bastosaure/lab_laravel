<?php

namespace App\Http\Controllers;


use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show()
    {
        return view('article');
    }

    public function store(ArticleRequest $request)
    {
        Article::create($request->all());
        return redirect('listing')->with('success', 'Nouvel article créé');

    }

    public function listing()
    {
        $articles = Article::all();

        dd($articles);
        return view('listing', compact('$articles');
    }

}
