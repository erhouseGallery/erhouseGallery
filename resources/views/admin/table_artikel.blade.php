@extends('layouts.main')

@section('content')
@include('components.sidebar')

<section id="karya" class="ml-30 mr-30 vh-100 pt-65">
  <a href="/buat_karya.html"><button class="red-button mt-65 mb-35">Buat Artikel Baru</button><a>
      <table class="table-a">
        <thead class="red text-white">
          <tr>
            <th scope="col">No</th>
            <th scope="col" style="width: 10%;">Judul</th>
            <th scope="col" style="width: 10%;">Deskripsi</th>
            <th scope="col" style="width: 10%;">Gambar</th>
            <th scope="col">Tahun</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-based">
          <tr>
            <th scope="row">1</th>
            <td>Lukisan Singa dari Singapura asdasdasdassada</td>
            <td class="text">Ide dasar penciptaan karya seni patung berjudul garuda dilatar
              belakangi dari mitos tentang cerita garuda dalam kitab Adiparwa. Selain
              itu, latar belakang diciptakan karya berjudul Garuda ini diperuntukan untuk
              mendukung pameran Pesta Kesenian Bali yang diselenggarakan setiap tahun.</td>
            <td>Gambar</td>
            <td>2018</td>
            <td>
              <button class="red-button" style="font-size: 10px;">Edit</button>
              <button class="red-button" style="font-size: 10px;">Hapus</button>
              <button class="red-button" style="font-size: 10px;">Detail</button>
            </td>
          </tr>
        </tbody>
      </table>
</section>

@include('components.footer')
@endsection