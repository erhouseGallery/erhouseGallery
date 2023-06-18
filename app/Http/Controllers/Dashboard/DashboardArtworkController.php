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
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->storeAs('artworks-image', $imageName );

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
                $file->storeAs('artworks-image', $imageName );
                ImageArtwork::create($request->all());
            }
        }
        return redirect('/admin/artworks')->with('success', 'data berhasil ditambahkan');
    }


 // $validateData = $request->validate([
        //     'title' => 'required|max:255',
        //     'slug' => 'required|unique:artworks',
        //     'category_id' => 'required',
        //     'image' => 'image|file|max:3072',
        //     'material' => 'required|max:255',
        //     'size' => 'required|max:255',
        //     'year' => 'required|max:255',
        //     'description' => 'required|max:255',
        //     'status_id' => 'required',
        // ]);

        // if($request->file('image')) {
        //     $validateData['image'] = $request->file('image')->store('artworks-image');
        // }



        // $validateData['user_id'] = auth()->user()->id;

        // Artwork::create($validateData);
        // return redirect('/admin/artworks')->with('success', 'data berhasil ditambahkan');


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
            'title' => 'Admin Detail Karya',
            'image_artworks' => $image_artworks,
        ]);
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
            'material' => 'required|max:255',
            'size' => 'required|max:255',
            'year' => 'required|max:255',
            'description' => 'required|max:255',
            'status_id' => 'required',
            'price' => 'required|max:255',
        ];

        if($request->slug != $artwork->slug) {
            $rules['slug'] = 'required|unique:artworks';
        }
            $validateData = $request->validate($rules);
        // untuk cover
        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->storeAs('artworks-image', $imageName );
             $validateData['cover'] = $imageName;

            if($artwork->cover != null) {
                Storage::delete('artworks-image/' . $artwork->cover);
            }

             $validateData['cover'] = $imageName;
        }

         $validateData['user_id'] = auth()->user()->id;
        Artwork::where('id', $artwork->id)
        ->update( $validateData);

        // untuk images
        if ($request->hasFile("images")) {
            $files = $request->file("images");

            $currentImages = ImageArtwork::where('artwork_id', $artwork->id)->get();

            if($currentImages != null) {
                foreach ($currentImages as $currentImage) {
                    Storage::delete('artworks-image/'. $currentImage->image);
                }

                ImageArtwork::where('artwork_id', $artwork->id)->delete();
            }

            foreach ($files as $file) {
                $imageName = time() . '-' . $file->getClientOriginalName();
                $request['artwork_id'] = $artwork->id;
                $request['image'] = $imageName;
                $file->storeAs('artworks-image', $imageName );
                ImageArtwork::create($request->all());
            }

        }

        return redirect('/admin/artworks')->with('success', 'data berhasil diupdate');
    }

    // ImageArtwork::where('artwork_id', $artwork->id)->delete();
            // Storage::delete('artworks-image/' . $artwork->image);

 // if($request->hasFile('cover')) {
        //     if($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        //     $validateData['image'] = $request->file('image')->store('artworks-image');
        // }


        // Artwork::where('id', $artwork->id)
        //         ->update($validateData);



    public function destroy(Artwork $artwork)
    {

        $artwork = Artwork::find($artwork->id);

        if($artwork->cover != null) {
            Storage::delete('artworks-image/' . $artwork->cover);
        }


        // IMAGES

        $currentImages = ImageArtwork::where('artwork_id', $artwork->id)->get();

        if($currentImages != null) {
            foreach ($currentImages as $currentImage) {
                Storage::delete('artworks-image/'. $currentImage->image);
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
