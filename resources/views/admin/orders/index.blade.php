@extends('layouts.main')

@section('content')
    @include('components.sidebar')



    <div class="main-content mt-5">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <a href="/admin/orders/create"><button class="red-button mb-35">Buat Pesanan Baru</button><a>
        <table class="table-responsive mt-3 ">
            <thead>
                <tr class="">
                    <th class="text-light text-center">No</th>
                    <th class="text-light text-center">Nama Pemesan</th>
                    <th class="text-light text-center">Alamat</th>
                    <th class="text-light text-center">Email</th>
                    <th class="text-light text-center">Nomor</th>
                    <th class="text-light text-center">Nama Pesanan</th>
                    <th class="text-light text-center">Kategori</th>
                    <th class="text-light text-center">gambar</th>
                    <th class="text-light text-center">Deskripsi</th>
                    <th class="text-light text-center">Keterangan</th>
                    <th class="text-light text-center">Catatan</th>
                    <th class="text-light text-center">Tanggal</th>
                    @can('admin')
                    <th scope="col" class="text-light text-center">Aksi</th>
                    @endcan
                </tr>
            </thead>
            <tbody class="">

                @foreach ($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->user->address }}</td>
                    <td>{{ $order->user->email }}</td>
                    <td>{{ $order->user->number }}</td>
                    <td>{{ $order->order_name }}</td>
                    <td>{{ $order->category->name }}</td>

                    <td><img src="{{ asset('storage/'. $order->image) }}" alt="" class="img-fluid" style="width : 80%"></td>

                    <td>{!! $order->description !!}</td>
                    <td>{{ $order->information->name }}</td>
                    <td>{{ $order->note }}</td>
                    <td>{{ $order->created_at }}</td>

                    @can('admin')
                    <td class="d-flex">
                        <button class="red-button mx-2" style="font-size: 10px;"><a href="/admin/orders/{{ $order->id }}/edit">edit</a></button>
                        <form action="/admin/orders/{{ $order->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="red-button mx-2" style="font-size: 10px;" onclick="return confirm('anda yakin ingin hapus?')" >Hapus</button>
                        </form>
                        <button class="red-button mx-2" style="font-size: 10px;">Detail</button>
                      </td>
                    @endcan
                </tr>

                @endforeach
            </tbody>

        </table>


    </div>
@endsection
