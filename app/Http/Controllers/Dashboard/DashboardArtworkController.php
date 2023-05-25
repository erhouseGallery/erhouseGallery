<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Artwork;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class DashboardArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.artworks.index',[
            'title' => 'Table Karya',
            'artworks' =>  Artwork::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.artworks.create', [
            'title' => 'Create Artworks',
            'categories' => Category::all(),
            'statuses' => Status::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artwork $artwork)
    {
        //

        Artwork::destroy($artwork->id);
        return redirect('/admin/artworks')->with('success', 'data berhasil dihapus');
    }
}
