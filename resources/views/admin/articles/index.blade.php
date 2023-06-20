@extends('layouts.main')

@section('content')

<div class="d-flex">
  @include('components.sidebar')

  <section id="table_artikel" class="admin-content">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <a href="/admin/articles/create"><button class="btn-create mb-4">Buat Artikel Baru</button><a>
    <table class="table-dashboard table table-striped table-hover ">
        <thead class="thead-dashboard">
            <tr >
                <th scope="col" class="text-center"><p>No </p></th>
                <th scope="col" class="text-center"><p>Judul</p> </th>
                <th scope="col"  class="text-center"><p> Cover</p> </th>
                <th scope="col"  class="text-center"> <p>Date </p> </th>
                @can('admin')
                <th scope="col" class="text-center"> <p> Aksi</p> </th>
                @endcan
            </tr>
        </thead>
        <tbody class="tbody-dashboard">

            @foreach ($articles as $article)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $article->title }}</td>
                <td><img class="w-120" src="{{ asset('storage/image-articles/' . $article->cover) }}" alt=""></td>
                <td>{{ $article->date->format('d M Y') }}</td>

                @can('admin')
                <td>
                    <div class="d-flex justify-content-center">
                        <button id="btn-action-edit" class="btn-action mx-2" ><a href="/admin/articles/{{ $article->slug }}/edit" style="text-decoration: none; color : inherit">edit</a></button>
                        <button  id="btn-action-detail" class="btn-action mx-2" > <a href="/admin/articles/{{ $article->slug }}" style="text-decoration: none; color : inherit">Detail</a>  </button>
                        <form action="/admin/articles/{{ $article->slug }}" method="post">
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

@include('components.footer')
@endsection
