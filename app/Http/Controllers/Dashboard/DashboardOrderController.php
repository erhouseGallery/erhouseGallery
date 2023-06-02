<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Category;
use App\Models\Information;
use App\Http\Controllers\Controller;
class DashboardOrderController extends Controller
{

    public function index()
    {
        return view('admin.orders.index',[
            'title' => 'pesanan',
            'orders' => Order::where('user_id', auth()->user()->id)->get()
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
        //

        $validateData = $request->validate([
            'order_name' => 'required|max:255',
            'category_id' => 'required',
            'description' => 'required|max:255',
        ]);

        $validateData['user_id'] = auth()->user()->id;
        Order::create($validateData);

        return redirect('/admin/orders')->with('success','pesanan berhasil dibuat, nohon ditunggu');

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
    public function edit(Order $order)
    {

        return view('admin.orders.edit', [
            'title' => 'Edit Pesanan',
            'order' => $order,
            'categories' => Category::all(),
            'information' => Information::all()
        ]);
    }


    public function update(Request $request, Order $order)
    {

        $validateData = $request->validate([
            'information_id' => 'required',
            'note' => 'required|max:255'
        ]);

        $validateData['user_id'] = auth()->user()->id;
        Order::where('id', $order->id)->update($validateData);
        return redirect('/admin/orders')->with('success', 'pesanan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        Order::destroy($order->id);
        return redirect('/admin/orders')->with('success', 'data berhasil dihapus');
    }
}
