<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Category;
use App\Models\Information;
use App\Http\Controllers\Controller;
use App\Models\ImageOrder;
use App\Models\ImageArtwork;
use App\Mail\OrderMail;
use App\Models\Artwork;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class DashboardOrderController extends Controller
{

    public function index()
    {
        if (auth()->user()->is_admin) {
            return view('admin.orders.index', [
                'title' => 'Dashboard Pesanan',
                'orders' => Order::paginate(5),
            ]);
        }
        return view('admin.orders.index', [
            'title' => 'pesanan',
            'orders' => Order::where('user_id', auth()->user()->id)->paginate(10),
        ]);
    }


    public function create()
    {
        return view('admin.orders.create', [
            'title' => 'Buat Pesanan',
            'categories' => Category::all(),
        ]);
    }


    public function store(Request $request)
    {
        $validateData = $request->validate([
            'order_name' => 'required|max:255',
            'category_id' => 'required',
            'description' => 'required|max:255',
        ]);

        $validateData['user_id'] = auth()->user()->id;
        $order = Order::create($validateData);
        $order->save();

        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $imageName = time() . '-' . $file->getClientOriginalName();
                $request['order_id'] = $order->id;
                $request['image'] = $imageName;
                $file->storeAs('public/image-orders', $imageName);
                ImageOrder::create($request->all());
            }
        }

        // Mail::to('irfannudinihsan@students.amikom.ac.id')->send(new OrderMail($order));
        return redirect('/admin/orders')->with('success', 'pesanan berhasil dibuat, mohon ditunggu');
    }


    public function show(Order $order)
    {
        $image_orders = ImageOrder::where('order_id', $order->id)->get();
        return view('admin.orders.show', [
            'title' => 'Detail Pesanan',
            'order' => $order,
            'categories' => Category::all(),
            'information' => Information::all(),
            'image_orders' => $image_orders,
        ]);
    }


    public function edit(Order $order, ImageArtwork $artwork_id)
    {
        // $image_artworks = ImageArtwork::where('artwork_id', $order->$artwork_id)->get();
        // return $image_artworks;
        $image_orders = ImageOrder::where('order_id', $order->id)->get();
        return view('admin.orders.edit', [
            'title' => 'Edit Pesanan',
            'order' => $order,
            'categories' => Category::all(),
            'information' => Information::all(),
            'image_orders' => $image_orders,
            // 'image_artworks' => $image_artworks,
        ]);
    }


    public function update(Request $request, Order $order)
    {

        $validateData = $request->validate([
            'information_id' => 'required',
            'note' => 'required|max:255'
        ]);

        Order::where('id', $order->id)->update($validateData);
        return redirect('/admin/orders')->with('success', 'pesanan berhasil diupdate');
    }


    public function destroy(Order $order)
    {

        $currentImages = ImageOrder::where('order_id', $order->id)->get();

        if ($currentImages != null) {
            foreach ($currentImages as $currentImage) {
                Storage::delete('public/image-orders/' . $currentImage->image);
            }
            ImageOrder::where('order_id', $order->id)->delete();
        }
        Order::destroy($order->id);
        return redirect('/admin/orders')->with('success', 'data berhasil dihapus');
    }
}
