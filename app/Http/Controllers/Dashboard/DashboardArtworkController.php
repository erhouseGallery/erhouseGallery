<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Artwork;
use App\Models\Category;
use App\Models\Status;
use App\Models\ImageArtwork;
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
            'title' => 'Dashboard Karya',

            'artworks' =>  Artwork::where('user_id', auth()->user()->id)->paginate(5)
        ]);
    }

    public function create()
    {
        //
        return view('admin.artworks.create', [
            'title' => 'Buat Karya',
            'categories' => Category::all(),
            'statuses' => Status::all()

        ]);
    }


    public function store(Request $request)

    {
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->storeAs('image-artworks', $imageName);

            $validationData = $request->validate([
                'title' => 'required|max:255',
                'category_id' => 'required',
                'material' => 'required|max:255',
                'size' => 'required|max:255',
                'year' => 'required|max:255',
                'description' => 'required|max:1000',
                'status_id' => 'required',
                'price' => 'required|max:255',
            ]);

            $validationData['cover'] = $imageName;
            $validationData['user_id'] = auth()->user()->id;

            $artwork = Artwork::create($validationData);
            $artwork->save();
        }

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '-' . $file->getClientOriginalName();
                $request['artwork_id'] = $artwork->id;
                $request['image'] = $imageName;
                $file->storeAs('image-artworks', $imageName);
                ImageArtwork::create($request->all());
            }
        }
        return redirect('/admin/artworks')->with('success', 'data berhasil ditambahkan');
    }




    public function show(Artwork $artwork)
    {

        if ($artwork->user->id !== auth()->user()->id) {
            abort(403);
        }

        $image_artworks = ImageArtwork::where('artwork_id', $artwork->id)->get();
        return view('admin.artworks.show', [
            'artwork' => $artwork,
            'categories' => Category::all(),
            'statuses' => Status::all(),
            'title' => 'Dashboard Detail Karya',
            'image_artworks' => $image_artworks,
        ]);
    }


    public function edit(Artwork $artwork)
    {

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
            'material' => 'required|max:255',
            'size' => 'required|max:255',
            'year' => 'required|max:255',
            'description' => 'required|max:255',
            'status_id' => 'required',
            'price' => 'required|max:255',
        ];

        if ($request->slug != $artwork->slug) {
            $rules['slug'] = 'required|unique:artworks';
        }
            $validateData = $request->validate($rules);

        // cover
        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->storeAs('image-artworks', $imageName );
             $validateData['cover'] = $imageName;

            if($artwork->cover != null) {
                Storage::delete('image-artworks/' . $artwork->cover);

            }

            $validateData['cover'] = $imageName;
        }

        $validateData['user_id'] = auth()->user()->id;
        Artwork::where('id', $artwork->id)
            ->update($validateData);

        // untuk images
        if ($request->hasFile("images")) {
            $files = $request->file("images");

            $currentImages = ImageArtwork::where('artwork_id', $artwork->id)->get();

            if ($currentImages != null) {
                foreach ($currentImages as $currentImage) {

                    Storage::delete('image-artworks/'. $currentImage->image);

                }

                ImageArtwork::where('artwork_id', $artwork->id)->delete();
            }

            foreach ($files as $file) {
                $imageName = time() . '-' . $file->getClientOriginalName();
                $request['artwork_id'] = $artwork->id;
                $request['image'] = $imageName;

                $file->storeAs('image-artworks', $imageName );

                ImageArtwork::create($request->all());
            }
        }

        return redirect('/admin/artworks')->with('success', 'data berhasil diupdate');
    }


    public function destroy(Artwork $artwork)
    {

        $artwork = Artwork::find($artwork->id);

        if ($artwork->cover != null) {
            Storage::delete('image-artworks/' . $artwork->cover);
        }


        // IMAGES

        $currentImages = ImageArtwork::where('artwork_id', $artwork->id)->get();

        if ($currentImages != null) {
            foreach ($currentImages as $currentImage) {
                Storage::delete('image-artworks/' . $currentImage->image);
            }

            ImageArtwork::where('artwork_id', $artwork->id)->delete();
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
