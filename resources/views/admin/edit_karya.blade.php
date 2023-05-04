@extends('layouts.main')

@section('content')
@include('components.sidebar')

<section id="buat_karya" class="mt-65 ml-143 mr-30 vh-100 pt-65">
  <h2 class="mb-15">Edit Karya</h2>
  <form class="w-75" action="">
    <div class="mb-3">
      <input type="text" class="form-control border-16" id="judul" placeholder="Judul">
    </div>
    <div class="form-group mb-3">
      <textarea name="deskripsi" id="deskripsi" class="form-control border-16 " rows="5" placeholder="Deskripsi"></textarea>
    </div>
    <div class="input-group mb-3 ">
      <input type="file" class="form-control border-16" id="inputGroupFile02">
    </div>

    <select class="form-select mb-3 border-16" aria-label="Default select example">
      <option selected>Kategori</option>
      <option value="1">Lukisan</option>
      <option value="2">Patung</option>
    </select>

    <div class="mb-3">
      <input type="text" class="form-control border-16" id="tahun" placeholder="Tahun">
    </div>

    <div class="mb-3">
      <input type="text" class="form-control border-16" id="ukuran" placeholder="Ukuran">
    </div>

    <div class="mb-3">
      <input type="text" class="form-control border-16" id="status" placeholder="Status">
    </div>

    <button type="submit" class="red-button">Submit</button>

  </form>
</section>

@include('components.footer')
@endsection