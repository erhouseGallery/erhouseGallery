<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Artwork;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artwork $artwork)
    {
        //
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'material' => 'required|max:255',
            'size' => 'required|max:255',
            'year' => 'required|max:255',
            'description' => 'required|max:255',
            'status_id' => 'required',

        ]);

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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artwork $artwork)
    {
        if($artwork->image) {
            Storage::delete($artwork->image);
        }

        Artwork::destroy($artwork->id);
        return redirect('/admin/artworks')->with('success', 'data berhasil dihapus');
    }
}
