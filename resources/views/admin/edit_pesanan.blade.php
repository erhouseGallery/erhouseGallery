@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="edit_pesanan" class="admin-form">
    <h2 class="mb-35">Edit Pesanan</h2>
    <form action="">
      <div class="mb-3">
        <input type="text" class="form-control border-16" id="nama" placeholder="Nama">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control border-16" id="nomor" placeholder="Nomor">
      </div>
      <div class="form-group mb-3">
        <div class="mb-3">
          <input type="text" class="form-control border-16" id="alamat" placeholder="Alamat">
        </div>
        <div class="input-group mb-3 ">
          <input type="file" class="form-control border-16" id="inputGroupFile02">
        </div>
        <textarea name="deskripsi" id="deskripsi" class="form-control border-16 " rows="5" placeholder="Deskripsi"></textarea>
      </div>

      <select class="form-select mb-3 border-16" aria-label="Default select example">
        <option selected>Status</option>
        <option value="1">Terima</option>
        <option value="2">Tolak</option>
      </select>

      <div>
        <textarea name="catatan" id="catatan" class="form-control border-16 mb-3 " rows="5" placeholder="Catatan"></textarea>
      </div>

      <button type="submit" class="red-button">Submit</button>

    </form>
  </section>
</div>

@include('components.footer')
@endsection