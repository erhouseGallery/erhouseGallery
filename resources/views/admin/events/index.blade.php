@extends('layouts.main')

@section('content')


<div class="d-flex">
  @include('components.sidebar')

  <section id="table_artikel" class="container admin-content">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <a href="/admin/events/create"><button class="btn-create mb-4">Buat Event Baru</button><a>

    <div class="table-responsive">
        <table class="table-dashboard  table table-striped table-hover">
            <thead class="thead-dashboard">
                <tr >
                    <th class="text-center"><p>No </p></th>
                    <th class="text-center"><p>Judul</p> </th>
                    <th  class="text-center"><p> Cover</p> </th>
                    <th  class="text-center"> <p>lokasi </p> </th>
                    @can('admin')
                    <th class="text-center"> <p> Aksi</p> </th>
                    @endcan
                </tr>
            </thead>
            <tbody class="tbody-dashboard">

                @foreach ($events as $event)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $event->title }}</td>
                    <td><img class="w-120" src="{{ asset('storage/image-events/' . $event->cover) }}" alt=""></td>
                    <td>{{ $event->location }}</td>

                    @can('admin')
                    <td>
                        <div class="d-flex justify-content-center">
                            <button  id="btn-action-detail" class="btn-action mx-2" > <a href="/admin/events/{{ $event->slug }}" style="text-decoration: none; color : inherit">Detail</a>  </button>
                            <button id="btn-action-edit" class="btn-action mx-2" ><a href="/admin/events/{{ $event->slug }}/edit" style="text-decoration: none; color : inherit">edit</a></button>
                            <form action="/admin/events/{{ $event->slug }}" method="post">
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





</section>
</div>

@include('components.footer')

@endsection
