@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="karya" class="admin-form">
    <table class="table mb-35">
      <thead class="red text-white">
        <tr>
          <th scope="col" class="text-center">No</th>
          <th scope="col" class="text-center" style="width: 10%;">Nama</th>
          <th scope="col" class="text-center" style="width: 10%;">Nomor</th>
          <th scope="col" class="text-center" style="width: 10%;">Alamat</th>
          <th scope="col" class="text-center" style="width: 10%;">Gambar</th>
          <th scope="col" class="text-center" style="width: 10%;">Deskripsi</th>
          <th scope="col" class="text-center">Status</th>
          <th scope="col" class="text-center">Catatan</th>
          <th scope="col" class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody class="bg-based">
        <tr>
          <th scope="row">1</th>
          <td>Irfannudin Ihsan</td>
          <td>085831008476</td>
          <td>Karang Kauman RT 05 Wijirejo Pandak Bantul Yogyakarta</td>
          <td>Gambar</td>
          <td class="text">Halo kak, tolong buatkan patung singa seperti gambar atau sketsa yang sama kirimkan. Tolong buatkan dengan bahan perunggu, terima kasih</td>
          <td>Diterima</td>
          <td>Pesanan sudah diterima, nanti akan dihubungi admin melalui WA</td>
          <td>
            <button class="red-button" style="font-size: 10px;">Detail</button>
          </td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Irfannudin Ihsan</td>
          <td>085831008476</td>
          <td>Karang Kauman RT 05 Wijirejo Pandak Bantul Yogyakarta</td>
          <td>Gambar</td>
          <td class="text">Halo kak, tolong buatkan patung singa seperti gambar atau sketsa yang sama kirimkan. Tolong buatkan dengan bahan perunggu, terima kasih</td>
          <td>Diterima</td>
          <td>Pesanan sudah diterima, nanti akan dihubungi admin melalui WA</td>
          <td>
            <button class="red-button" style="font-size: 10px;">Detail</button>
          </td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Irfannudin Ihsan</td>
          <td>085831008476</td>
          <td>Karang Kauman RT 05 Wijirejo Pandak Bantul Yogyakarta</td>
          <td>Gambar</td>
          <td class="text">Halo kak, tolong buatkan patung singa seperti gambar atau sketsa yang sama kirimkan. Tolong buatkan dengan bahan perunggu, terima kasih</td>
          <td>Diterima</td>
          <td>Pesanan sudah diterima, nanti akan dihubungi admin melalui WA</td>
          <td>
            <button class="red-button" style="font-size: 10px;">Detail</button>
          </td>
        </tr>
      </tbody>
    </table>
  </section>
</div>

@include('components.footer')
@endsection