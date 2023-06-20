<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Article;
use App\Models\ImageArticle;
use Illuminate\Support\Facades\Storage;

use \Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardArticleController extends Controller
{


    public function index()
    {

        return view('admin.articles.index', [
            'title' => "Dashboard Artikel",
            'articles' => Article::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        return view('admin.articles.create', [
            'title' => 'Buat Artikel',
        ]);
    }


    public function store(Request $request)
    {

        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->storeAs('image-articles', $imageName );

            $validationData = $request->validate([
                'title' => 'required|max:255',
                'content' => 'required|max:1000',
            ]);

            $validationData['cover'] = $imageName;
            $validationData['user_id'] = auth()->user()->id;

            $article = Article::create($validationData);
            $article->save();

        }

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '-' . $file->getClientOriginalName();
                $request['article_id'] = $article->id;
                $request['image'] = $imageName;
                $file->storeAs('image-articles', $imageName );
                ImageArticle::create($request->all());
            }
        }
        return redirect('/admin/articles')->with('success', 'data berhasil ditambahkan');

    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(Article $article)
    {

       $article = Article::find($article->id);

       if($article->cover != null ) {
        Storage::delete('image-articles/' . $article->cover);
       }

       //images

       $currentImages = ImageArticle::where('article_id', $article->id)->get();

       if($currentImages != null) {
        foreach ($currentImages as $currentImage) {
            Storage::delete('image-articles/'. $currentImage->image);
        }

        ImageArticle::where('article_id', $article->id)->delete();
    }

    Article::destroy($article->id);
    return redirect('/admin/articles')->with('success', 'data berhasil dihapus');
    }
}
