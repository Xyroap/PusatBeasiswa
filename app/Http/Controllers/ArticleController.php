<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function dashboard()
    {
        $articles = Article::where('is_featured', 1)->get();

        return view('dashboard', compact('articles'));
    }

    public function index()
    {
        $search = request('search');

        $articles = Article::query()
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'like', "%{$search}%")
                      ->orWhere('author', 'like', "%{$search}%");
            })
            ->latest()
            ->get();

        return view('articles', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('article-detail', compact('article'));
    }
}