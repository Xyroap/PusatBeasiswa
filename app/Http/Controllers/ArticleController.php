<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('is_featured', 1)->get();

        return view('dashboard', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('article-detail', compact('article'));
    }
}