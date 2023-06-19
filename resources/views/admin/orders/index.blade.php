@extends('layouts.main')

@section('content')

<div class="d-flex">
    @include('components.sidebar')

<section id="table_pemesanan" class="admin-content">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <a href="/admin/orders/create"><button class="btn-create mb-4">Buat Pesanan Baru</button><a>
        <table class="table-dashboard table table-striped table-hover ">
            <thead class="thead-dashboard">
                <tr >
                    <th scope="col" class="text-center"><p>No </p></th>
                    <th scope="col" class="text-center"><p>Nama Pemesan</p> </th>
                    <th scope="col"  class="text-center"><p> Nama Pesanan</p> </th>
                    <th scope="col"  class="text-center"> <p>Kategori </p> </th>
                    <th scope="col"  class="text-center"> <p>Keterangan </p> </th>
                    <th scope="col"  class="text-center"><p>Catatan </p></th>
                    <th scope="col"  class="text-center"> <p>Tanggal </p> </th>
                    @can('admin')
                    <th scope="col" class="text-center"> <p> Aksi</p> </th>
                    @endcan
                </tr>
            </thead>
            <tbody class="tbody-dashboard">

                @foreach ($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->order_name }}</td>
                    <td>{{ $order->category->name }}</td>
                    <td>{{ $order->information->name }}</td>
                    <td>{{ $order->note }}</td>
                    <td>{{ $order->date->format('d M Y') }}</td>

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




</section>
</div>


@endsection
