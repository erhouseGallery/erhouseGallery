@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="edit_karya" class="admin-form">
    <h2 class="mb-15">Edit Karya</h2>
    <form action="post" action="/admin/artworks/{{ $arwork->id }}">
        @method('put')
        @csrf
      <div class="mb-3">
        <input type="text" class="form-control border-16" id="judul" placeholder="Judul">
      </div>
      <div class="form-group mb-3">
        <textarea name="deskripsi" id="deskripsi" class="form-control border-16 " rows="5" placeholder="Deskripsi"></textarea>
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

</div>

@include('components.footer')

@endsection
