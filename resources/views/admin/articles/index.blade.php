@extends('layouts.main')

@section('content')

<div class="d-flex">
  @include('components.sidebar')

  <section id="karya" class="admin-form">
    <a href="/admin/articles/create"><button class="red-button mb-35">Buat Artikel Baru</button><a>
        <table class="table-a">
          <thead class="red text-white">
            <tr>
              <th scope="col" class="text-center">No</th>
              <th scope="col" class="text-center">Judul</th>
              <th scope="col" class="text-center">Gambar</th>
              <th scope="col" class="text-center">Konten</th>
              <th scope="col" class="text-center">Tanggal</th>
              <th scope="col" class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-based">
            @foreach($articles as $article)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{$article->title}}</td>
              <td class="text"> {{$article->image}} </td>
              {{-- <td> <img style="width: 50px;" src="{{$article->image}}" alt=""> </td> --}}
              <td> {{$article->content}} </td>
              <td> {{$article->created_at->format('d M Y')}} </td>
              <td class="d-flex">
                <a href="/admin/articles/edit/{{$article->id}}" class="red-button" style="font-size: 10px;">Edit</a>

                <form action="/admin/articles/delete/{{$article->id}}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="red-button mx-2" style="font-size: 10px;">Hapus</button>
                </form>

                <a href="/articles/show/{{$article->id}}" class="red-button" style="font-size: 10px;">Detail</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </section>
</div>

@include('components.footer')
@endsection
