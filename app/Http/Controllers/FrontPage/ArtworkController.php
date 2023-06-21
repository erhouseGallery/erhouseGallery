<?php

namespace App\Http\Controllers\FrontPage;

use App\Models\Article;
use App\Models\Artwork;
use App\Models\Category;
use App\Models\ImageArtwork;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class ArtworkController extends Controller
{

    // menampilkan semua artworks (karya)
    public function index(Request $request) {
        // $artworks = Artwork::all();
        $artworks = Artwork::with(['category','status'])->latest()->filter()->paginate(6);
        return view('artworks.index', [
            'title' => 'karya',
            'artworks' => $artworks,
        ]);

        // $category = $request->query('category');

        // $artworksQuery = Artwork::query();

        // if ($category) {
        //     $artworksQuery->where('category', $category);
        // }
        // $artworks = $artworksQuery->get();

        // return view('artworks.index', compact('artworks'));

    }

    // menampilkan artwork (karya) berdasarkan id
    public function show(Artwork $artwork) {

        $image_artworks = ImageArtwork::where('artwork_id', $artwork->id)->get();
        return view('artworks.show', [
            'title' => 'Detail Karya',
            'artwork' => $artwork,
            'image_artworks' => $image_artworks,
        ]);
    }

    public function getByCategory(Category $category) {
        // return $category->artworks()->paginate(6);

        return view('artworks.index', [
            'title' => 'karya',
            'artworks' => $category->artworks()->paginate(6),
        ]);
    }

    public function buy(Artwork $artwork) {
        // return $artwork;
        $artwork->update([
            'status_id' => 2
        ]);
        $orderData = Order::create([
            'user_id' => auth()->user()->id,
            'order_name' => $artwork->title,
            'category_id' => $artwork->category_id,
            'description' => $artwork->description,
        ]);

        Mail::to('irfannudinihsan@students.amikom.ac.id')->send(new OrderMail($orderData));

        return redirect('/admin/orders');
    }
}
