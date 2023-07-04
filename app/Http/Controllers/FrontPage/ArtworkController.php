<?php

namespace App\Http\Controllers\FrontPage;

use App\Models\Article;
use App\Models\Artwork;
use App\Models\Category;
use App\Models\ImageArtwork;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\ImageOrder;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class ArtworkController extends Controller
{

    // menampilkan semua artworks (karya)
    public function index(Request $request)
    {
        // $artworks = Artwork::all();

        $artworks = Artwork::with(['category', 'status'])->latest()->filter()->paginate(12);
        return view('index', [
            'title' => 'Erhouse Gallery',
            'artworks' => $artworks,
        ]);
    }


    public function indexArtworks(Request $request)
    {
        // $artworks = Artwork::all();
        $artworks = Artwork::with(['category', 'status'])->latest()->filter()->paginate(12);
        return view('artworks.index', [
            'title' => 'Karya Seni',
            'artworks' => $artworks,
        ]);
    }

    // menampilkan artwork (karya) berdasarkan id
    public function show(Artwork $artwork)
    {

        $image_artworks = ImageArtwork::where('artwork_id', $artwork->id)->get();
        return view('artworks.show', [
            'title' => 'Detail Karya',
            'artwork' => $artwork,
            'image_artworks' => $image_artworks,
        ]);
    }

    public function getByCategory(Category $category)
    {
        // return $category->artworks()->paginate(6);

        return view('artworks.index', [
            'title' => 'Karya Seni',
            'artworks' => $category->artworks()->paginate(6),
        ]);
    }

    public function buy(Artwork $artwork)
    {
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

        $image_artworks = ImageArtwork::where('artwork_id', $artwork->id)->get();
        // split data from array and save to database
        foreach ($image_artworks as $image_artwork) {
            $image_order = ImageOrder::create([
                'order_id' => $orderData->id,
                'image' => $image_artwork->image,
            ]);
            $image_order->save();
        }

        Mail::to('iponez056@gmail.com')->send(new OrderMail($orderData));

        return redirect('/admin/orders');
    }
}
