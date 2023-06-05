<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Artwork;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;



use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardArtworkController extends Controller
{

    public function index()
    {

        return view('admin.artworks.index',[
            'title' => 'Table Karya',
            'artworks' =>  Artwork::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        //
        return view('admin.artworks.create', [
            'title' => 'Create Artworks',
            'categories' => Category::all(),
            'statuses' => Status::all()

        ]);
    }


    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:artworks',
            'category_id' => 'required',
            'image' => 'image|file|max:3072',
            'material' => 'required|max:255',
            'size' => 'required|max:255',
            'year' => 'required|max:255',
            'description' => 'required|max:255',
            'status_id' => 'required',
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('artworks-image');
        }



        $validateData['user_id'] = auth()->user()->id;

        Artwork::create($validateData);
        return redirect('/admin/artworks')->with('success', 'data berhasil ditambahkan');


    }

    public function show(string $id)
    {
        //
    }


    public function edit(Artwork $artwork)
    {
        // agar tidak bisa melihat yang lain
        // if ($artwork->user->id !== auth()->user()->id) {
        //     abort(403);
        // }

        return view('admin.artworks.edit', [
            'title' => 'Edit Karya',
            'artwork' => $artwork,
            'categories' => Category::all(),
            'statuses' => Status::all()

        ]);
    }


    public function update(Request $request, Artwork $artwork)
    {

        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'material' => 'required|max:255',
            'size' => 'required|max:255',
            'year' => 'required|max:255',
            'description' => 'required|max:255',
            'status_id' => 'required',
        ];

        if($request->slug != $artwork->slug) {
            $rules['slug'] = 'required|unique:artworks';
        }

            $validateData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('artworks-image');
        }

        $validateData['user_id'] = auth()->user()->id;
        Artwork::where('id', $artwork->id)
                ->update($validateData);

        return redirect('/admin/artworks')->with('success', 'data berhasil diupdate');
    }


    public function destroy(Artwork $artwork)
    {
        if($artwork->image) {
            Storage::delete($artwork->image);
        }

        Artwork::destroy($artwork->id);
        return redirect('/admin/artworks')->with('success', 'data berhasil dihapus');
    }

    //cek slug dan buat slug
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Artwork::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
