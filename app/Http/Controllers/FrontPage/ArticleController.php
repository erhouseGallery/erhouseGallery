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

    public function indexAdmin ()
    {
        $articles = Article::all();
        // return view('admin')
        return view('admin.articles.index', [
            "title" => "Table Artikel",
            "articles" => $articles
        ]);
    }

    public function createAdmin()
    {
        return view('admin.articles.create', [
            "title" => "Buat Artikel"
        ]);
        // menampilkan form article
    }

    public function storeAdmin()
    {
        Article::create([
            "title" => request()->title,
            "description" => request()->description,
            "date" => request()->date,
        ]);
        return redirect('/admin/articles');
        // memasukan data ke db
    }

    public function editAdmin(Article $article)
    {
        return view('admin.articles.edit', [
            "title" => "Edit Artikel",
            "article" => $article
        ]);
    }

    public function updateAdmin(Article $article)
    {
        $article->update([
            'title' => request()->title,
            'description' => request()->description,
            'date' => request()->date,
        ]);

        return redirect('/admin/articles');
    }

    public function destroyAdmin(Article $article)
    {
        $article->delete();
        return redirect('/admin/articles');

    }
}
