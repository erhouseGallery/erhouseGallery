@extends('layouts.main')

@section('content')

<div class="d-flex">
@include('components.sidebar')

<section id="buat_karya" class="admin-form">
  <h2 class="mb-15 ">Buat Artikel</h2>
  <form method="post" action="/admin/articles/store">
    @csrf
    <div class="mb-3">
      <input type="text" class="form-control border-16" id="title" name="title" placeholder="Judul">
    </div>
    <div class="form-group mb-3">
      <textarea name="description" id="description" class="form-control border-16 " rows="5" placeholder="Deskripsi"></textarea>
    </div>
    <div class="input-group mb-3 ">
      <input type="file" class="form-control border-16" id="inputGroupFile02">
    </div>

    <div class="mb-3">
      <input type="text" class="form-control border-16" id="date" name="date" placeholder="Tahun">
    </div>

    <button type="submit" class="red-button">Submit</button>

  </form>
</section>
</div>

@include('components.footer')
@endsection