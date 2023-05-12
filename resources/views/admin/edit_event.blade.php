@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="edit_event" class="admin-form">
    <h2 class="mb-15">Edit Event</h2>
    <form action="">
      <div class="mb-3">
        <input type="text" class="form-control border-16" id="judul" placeholder="Judul">
      </div>
      <div class="form-group mb-3">
        <textarea name="deskripsi" id="deskripsi" class="form-control border-16 " rows="5" placeholder="Deskripsi"></textarea>
      </div>
      <div class="input-group mb-3 ">
        <input type="file" class="form-control border-16" id="inputGroupFile02">
      </div>


      <div class="mb-3">
        <input type="text" class="form-control border-16" id="lokasi" placeholder="Lokasi">
      </div>

      <div class="mb-3">
        <input type="text" class="form-control border-16" id="tahun" placeholder="Tahun">
      </div>

      <div class="mb-3">
        <input type="text" class="form-control border-16" id="waktu" placeholder="Waktu">
      </div>

      <button type="submit" class="red-button">Submit</button>

    </form>
  </section>
</div>
@include('components.footer')
@endsection