@extends('layouts.main')

@section('content')
@include('components.sidebar')

<section id="karya" class="ml-30 mr-30 pt-65">
  <a href="/buat_karya.html"><button class="red-button mt-65 mb-35">Buat Karya Baru</button><a>
      <table class="table-a">
        <thead class="red text-white">
          <tr>
            <th scope="col">No</th>
            <th scope="col" style="width: 10%;">Judul</th>
            <th scope="col" style="width: 10%;">Deskripsi</th>
            <th scope="col" style="width: 10%;">Gambar</th>
            <th scope="col">Kategori</th>
            <th scope="col">Tahun</th>
            <th scope="col">Ukuran</th>
            <th scope="col">Bahan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-based">
          <tr>
            <th scope="row">1</th>
            <td>Lukisan Singa dari Singapura asdasdasdassada</td>
            <td class="text">Ide dasar penciptaan karya seni patung berjudul garuda
              dilatarbelakangi dari mitos tentang cerita garuda dalam kitab Adiparwa. Selain
              itu, latar belakang diciptakan karya berjudul Garuda ini diperuntukan untuk
              mendukung pameran Pesta Kesenian Bali yang diselenggarakan setiap tahun.</td>
            <td>
              <img class="w-120" src="./assets/img/karya/monalisa.jpg" alt="">
            </td>
            <td>Lukisan</td>
            <td>2018</td>
            <td>120 x 80</td>
            <td>Acrylic on board</td>
            <td>
              <button class="red-button" style="font-size: 10px;">Edit</button>
              <button class="red-button" style="font-size: 10px;">Hapus</button>
              <button class="red-button" style="font-size: 10px;">Detail</button>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Lukisan Singa dari Singapura asdasdasdassada</td>
            <td class="text">Ide dasar penciptaan karya seni patung berjudul garuda
              dilatarbelakangi dari mitos tentang cerita garuda dalam kitab Adiparwa. Selain
              itu, latar belakang diciptakan karya berjudul Garuda ini diperuntukan untuk
              mendukung pameran Pesta Kesenian Bali yang diselenggarakan setiap tahun.</td>
            <td>Gambar</td>
            <td>Lukisan</td>
            <td>2018</td>
            <td>120 x 80</td>
            <td>Acrylic on board</td>
            <td>
              <button class="red-button" style="font-size: 10px;">Edit</button>
              <button class="red-button" style="font-size: 10px;">Hapus</button>
              <button class="red-button" style="font-size: 10px;">Detail</button>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Lukisan Singa dari Singapura asdasdasdassada</td>
            <td class="text">Ide dasar penciptaan karya seni patung berjudul garuda
              dilatarbelakangi dari mitos tentang cerita garuda dalam kitab Adiparwa. Selain
              itu, latar belakang diciptakan karya berjudul Garuda ini diperuntukan untuk
              mendukung pameran Pesta Kesenian Bali yang diselenggarakan setiap tahun.</td>
            <td>Gambar</td>
            <td>Lukisan</td>
            <td>2018</td>
            <td>120 x 80</td>
            <td>Acrylic on board</td>
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