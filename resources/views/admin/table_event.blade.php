@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="table_event" class="admin-form">
    <a href="/buat_karya.html"><button class="red-button mb-35">Buat Event Baru</button><a>
        <table class="table">
          <thead class="red text-white">
            <tr>
              <th scope="col" class="text-center">No</th>
              <th scope="col" class="text-center" style="width: 10%;">Judul</th>
              <th scope="col" class="text-center" style="width: 10%;">Deskripsi</th>
              <th scope="col" class="text-center" style="width: 10%;">Gambar</th>
              <th scope="col" class="text-center">Lokasi</th>
              <th scope="col" class="text-center">Tahun</th>
              <th scope="col" class="text-center">Waktu</th>
              <th scope="col" class="text-center">Aksi</th>
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
              <td class="text">Ide dasar penciptaan karya seni patung berjudul garuda dilatar
                belakangi dari mitos tentang cerita garuda dalam kitab Adiparwa. Selain
                itu, latar belakang diciptakan karya berjudul Garuda ini diperuntukan untuk
                mendukung pameran Pesta Kesenian Bali yang diselenggarakan setiap tahun.</td>
              <td>2018</td>
              <td>11 Februari 2018</td>
              <td class="d-flex">
                <button class="red-button mx-2" style="font-size: 10px;">Edit</button>
                <button class="red-button mx-2" style="font-size: 10px;">Hapus</button>
                <button class="red-button mx-2" style="font-size: 10px;">Detail</button>
              </td>
            </tr>
          </tbody>
        </table>
  </section>
</div>

@include('components.footer')
@endsection