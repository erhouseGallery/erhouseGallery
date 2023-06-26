@extends('layouts.main')

@section('content')
    <div class="d-flex">
        @include('components.sidebar')

  <section id="table_karya" class="container admin-content">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <a href="/admin/artworks/create"><button class="btn-create mb-4">Buat Karya Baru</button><a>

        <div class="table-responsive">
            <table class="table-dashboard  table table-striped table-hover">
                <thead class="thead-dashboard">
                  <tr>
                    <th class="text-center"><p>No </p> </th>
                    <th class="text-center" > <p>Judul</p> </th>
                    <th class="text-center"> <p>Kategori </p> </th>
                    <th class="text-center" > <p>Cover </p></th>
                    <th class="text-center" > <p> Status</p></th>
                    <th class="text-center"> <p> Aksi </p></th>
                  </tr>
                </thead>
                <tbody class="tbody-dashboard">
                  @foreach ($artworks as $artwork)
                  <tr>
                    <th class="text-center">{{ $loop->iteration }}</th>
                    <td class="text-center">{{ $artwork->title }}</td>
                    <td class="text-center">{{ $artwork->category->name }}</td>
                    <td class="text-center"><img class="w-120" src="{{ asset('storage/image-artworks/' . $artwork->cover) }}" alt=""></td>
                    <td class="text-center">{{ $artwork->status->name }}</td>
                    <td >
                  <div class="d-flex justify-content-center" >
                      <button id="btn-action-edit" class="btn-action mx-2"><a href="/admin/artworks/{{ $artwork->slug }}/edit" style="text-decoration: none; color : inherit">edit</a></button>
                      <button  id="btn-action-detail" class="btn-action mx-2" > <a href="/admin/artworks/{{ $artwork->slug }}" style="text-decoration: none; color : inherit">Detail</a>  </button>
                      <form action="/admin/artworks/{{ $artwork->slug }}" method="post">
                      @method('delete')
                      @csrf
                      <button id="btn-action-delete" class="btn-action mx-2"  onclick="return confirm('anda yakin ingin hapus?')" >Hapus</button>
                      </form>
                  </div>

                    </td>
                  </tr>

                  @endforeach

                </tbody>
              </table>
        </div>

        {{ $artworks->links() }}
  </section>
</div>

@include('components.footer')

@endsection
