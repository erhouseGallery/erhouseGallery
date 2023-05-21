<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{

    // menampilkan semua artworks (karya)
    public function index() {

        // $artworks = Artwork::all();
        $artworks = Artwork::with(['category','status'])->latest()->get();
        return view('artworks.index', [
            'title' => 'karya',
            'artworks' => $artworks,
        ]);
    }

    // menampilkan artwork (karya) berdasarkan id
    public function show(Artwork $id) {
        return view('artworks.show', [
            'title' => 'Detail Karya',
            'artwork' => $id,
        ]);
    }

}
