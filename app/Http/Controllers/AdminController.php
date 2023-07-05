<?php

namespace App\Http\Controllers;
use App\Models\Artwork;
use App\Models\Article;

use App\Models\Event;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {

        if(auth()->user()->is_admin) {
            return view('admin.dashboard_admin', [
            'title' => "Dashboard",
            'artworks' => Artwork::all(),
            'articles' => Article::all(),
            'events' => Event::all(),
            'orders' => Order::all(),
            'users' => User::all(),

            ]);
        }

        return view('admin.dashboard_admin', [
            'title' => "Dashboard",
            'orders' => Order::where('user_id', auth()->user()->id)
        ]);
    }
}
