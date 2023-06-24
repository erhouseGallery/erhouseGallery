@extends('layouts.main')

@section('content')

<div class="d-flex">
    @include('components.sidebar')

<section id="table_pesanan" class="container admin-content ">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <a href="/admin/orders/create"><button class="btn-create mb-4">Buat Pesanan Baru</button><a>

       <div class="table-responsive">
        <table class="table-dashboard   table table-striped table-hover ">
            <thead class="thead-dashboard">
                <tr >
                    <th class="text-center"><p>No </p></th>
                    <th class="text-center"><p>Nama Pemesan</p> </th>
                    <th  class="text-center"><p> Nama Pesanan</p> </th>
                    <th  class="text-center"> <p>Kategori </p> </th>
                    <th  class="text-center"> <p>Keterangan </p> </th>
                    <th  class="text-center"><p>Catatan </p></th>
                    <th  class="text-center"> <p>Tanggal </p> </th>
                    @can('admin')
                    <th class="text-center" style="border-radius: 2px"> <p> Aksi</p> </th>
                    @endcan
                </tr>
            </thead>
            <tbody class="tbody-dashboard">

                @foreach ($orders as $order)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $order->user->name }}</td>
                    <td class="text-center">{{ $order->order_name }}</td>
                    <td class="text-center">{{ $order->category->name }}</td>
                    <td class="text-center">{{ $order->information->name }}</td>
                    <td class="text-center">{{ $order->note }}</td>
                    <td class="text-center">{{ $order->date->format('d M Y') }}</td>

                    @can('admin')
                    <td>
                        <div class="d-flex justify-content-center">
                            <button id="btn-action-edit" class="btn-action mx-2" ><a href="/admin/orders/{{ $order->id }}/edit" style="text-decoration: none; color : inherit">edit</a></button>
                            <button  id="btn-action-detail" class="btn-action mx-2" > <a href="/admin/orders/{{ $order->slug }}" style="text-decoration: none; color : inherit">Detail</a>  </button>
                            <form action="/admin/orders/{{ $order->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button id="btn-action-delete" class="btn-action mx-2" onclick="return confirm('anda yakin ingin hapus?')" >Hapus</button>
                            </form>

                        </div>

                      </td>
                    @endcan
                </tr>

                @endforeach
            </tbody>


        </table>

       </div>



        <div class="pagination">
            {{ $orders->links() }}

        </div>





</section>
</div>


@endsection
