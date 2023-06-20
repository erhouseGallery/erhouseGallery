@extends('layouts.main')
@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="buat_pesanan" class="admin-content">
    <h2 class="mb-3 black">Buat Pesanan</h2>
    <form method="post" action="/admin/orders" enctype="multipart/form-data">
        @csrf
      <div class="input-dashboard">
        <label for="title">Nama pemesanan</label>
        <input type="text" class="form-control @error('order_name') is-invalid @enderror border-16" id="order_name" name="order_name" placeholder="Nama Pesanan" required autofocus>
        @error('order_name')
            <div class="invalid-feedback">
                {{ $message }}
                </div>
        @enderror
      </div>


      <div class="input-dashboard">
        <label for="category">Kategori</label>

        <select class="form-select mb-3 border-16" name="category_id" >
            <option disabled selected hidden>Kategori</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}"> {{$category->name}}</option>
            @endforeach
          </select>
      </div>



      <div class="input-dashboard ">
        <label for="images">Gambar/sketsa pesanan</label>
        {{-- <img  class="img-preview img-fluid" alt=""> --}}
        <input type="file" class="form-control  @error('image') is-invalid @enderror border-16" id="images" name="images[]" onchange="previewImage()" multiple required autofocus>
        @error('images')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>


    <div class="input-dashboard-trix-editor">
        <label for="description">Deskripsi Pesananan</label>
        <input id="description" type="hidden" name="description" class="form-control-trix-editor @error('description') is-invalid @enderror border-16">
        <trix-editor input="description"></trix-editor>
        @error('description')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>





      <button type="submit" class="btn-submit">Submit</button>

    </form>
  </section>
</div>

@include('components.footer')

<script>
    function previewImage() {

    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }

    }
    </script>
@endsection
