@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="table_karya" class="admin-form">
    <a href="/buat_karya.html"><button class="red-button mb-35">Buat Karya Baru</button><a>
        <table class="table-a">
          <thead class="red text-white">
            <tr>
              <th scope="col" class="text-center">No</th>
              <th scope="col" class="text-center" style="width: 10%;">Judul</th>
              <th scope="col" class="text-center">Kategori</th>
              <th scope="col" class="text-center" style="width: 10%;">Gambar</th>
              <th scope="col" class="text-center">Bahan</th>
              <th scope="col" class="text-center">Ukuran</th>
              <th scope="col" class="text-center">Tahun</th>
              <th scope="col" class="text-center" style="width: 10%;">Deskripsi</th>
              <th scope="col" class="text-center" style="width: 10%;">Status</th>
              <th scope="col" class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-based">

            @foreach ($artworks as $artwork)


            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $artwork->title }}</td>
              <td>{{ $artwork->category->name }}</td>
              <td><img class="w-120" src="./assets/img/karya/monalisa.jpg" alt=""></td>
              <td>{{ $artwork->material }}</td>
              <td>{{ $artwork->size }}</td>
              <td>{{ $artwork->year }}</td>
              <td class="text">{{ $artwork->description }}</td>
              <td>{{ $artwork->status->name }}</td>




              <td class="d-flex">
                <button class="red-button mx-2" style="font-size: 10px;">Edit</button>
                <button class="red-button mx-2" style="font-size: 10px;">Hapus</button>
                <button class="red-button mx-2" style="font-size: 10px;">Detail</button>
              </td>
            </tr>

            @endforeach

          </tbody>
        </table>
  </section>
</div>

@include('components.footer')
@endsection
