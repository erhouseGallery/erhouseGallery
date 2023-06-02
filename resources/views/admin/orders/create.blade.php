@extends('layouts.main')
@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="buat_karya" class="admin-form">
    <h2 class="mb-15 black">Buat Pesanan</h2>
    <form method="post" action="/admin/orders" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <input type="text" class="form-control @error('order_name') is-invalid @enderror border-16" id="order_name" name="order_name" placeholder="Nama Pesanan" required autofocus>
        @error('order_name')
            <div class="invalid-feedback">
                {{ $message }}
                </div>
        @enderror
      </div>

      <select class="form-select mb-3 border-16" name="category_id" >
        <option selected>Kategory</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}"> {{$category->name}}</option>
        @endforeach
      </select>


      {{-- <div class="input-group mb-3 ">
        <img  class="img-preview img-fluid" alt="">
        <input type="file" class="form-control  @error('image') is-invalid @enderror border-16" id="image" name="image" onchange="previewImage()" multiple>
        @error('image')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div> --}}

       <div class="form-group mb-3">
        <textarea name="description" class="form-control @error('description') is-invalid @enderror border-16" id="description" name="description" class="form-control border-16 " rows="5" placeholder="Deskripsi"  required autofocus ></textarea>
        @error('description')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>




      <button type="submit" class="red-button">Submit</button>

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
