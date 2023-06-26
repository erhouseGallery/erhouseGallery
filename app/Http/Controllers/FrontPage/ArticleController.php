<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ImageArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Article $article)
    {

        $articles = Article::latest()->paginate(5);
        return view('articles.index', [
            'title' => 'Artikel',
            'articles' => $articles,
        ]);



    }


    public function show(Article $article)
    {

        $image_articles = ImageArticle::where('article_id', $article->id)->get();
        return view('articles.show', [
            'title' => 'Detail Artikel',
            'article' => $article,
            'image_articles' => $image_articles,
        ]);
    }
}
