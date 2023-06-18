@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="table_karya" class="admin-form">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <a href="/admin/artworks/create"><button class="btn-create mb-4">Buat Karya Baru</button><a>
        <table class="table-dashboard table table-striped table-hover">
          <thead class="thead-dashboard">
            <tr>
              <th scope="col" class="text-center">No</th>
              <th scope="col" class="text-center" >Judul</th>
              <th scope="col" class="text-center">Kategori</th>
              <th scope="col" class="text-center" >Cover</th>
              <th scope="col" class="text-center" >Status</th>
              <th scope="col" class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody class="tbody-dashboard">
            @foreach ($artworks as $artwork)
            <tr>
              <th scope="row" class="text-center">{{ $loop->iteration }}</th>
              <td class="text-center">{{ $artwork->title }}</td>
              <td class="text-center">{{ $artwork->category->name }}</td>
              <td class="text-center"><img class="w-120" src="{{ asset('storage/artworks-image/' . $artwork->cover) }}" alt=""></td>
              <td class="text-center">{{ $artwork->status->name }}</td>




              <td

              class="d-flex justify-content-center align-items-center">
                <button id="btn-action-edit" class="btn-action mx-2"><a href="/admin/artworks/{{ $artwork->slug }}/edit" style="text-decoration: none; color : inherit">edit</a></button>
                <button id="btn-action-detail" class="btn-action mx-2" >Detail</button>
                <form action="/admin/artworks/{{ $artwork->slug }}" method="post">
                @method('delete')
                @csrf
                <button id="btn-action-delete" class="btn-action mx-2"  onclick="return confirm('anda yakin ingin hapus?')" >Hapus</button>
                </form>

              </td>
            </tr>

            @endforeach

          </tbody>
        </table>
  </section>
</div>

@include('components.footer')
@endsection
