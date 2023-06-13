@extends('layouts.main')
@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="buat_karya" class="admin-form">
    <h2 class="mb-3 black">Buat Karya</h2>
    <div class="line mb-6"></div>
    <form method="post" action="/admin/artworks" enctype="multipart/form-data">
        @csrf
      <div class="input-dashboard">
        <label for="title">Judul</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" placeholder="Judul" required autofocus>
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
                </div>
        @enderror
      </div>
      <div class="input-dashboard">
        <input type="text" class="form-control @error('slug') is-invalid @enderror " id="slug" name="slug" placeholder="judul for url" required autofocus disabled>
        @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
                </div>
        @enderror
      </div>

      <div class="input-dashboard">
        <label for="category" >Kategori </label>
        <select class="form-select mb-3 " name="category_id" >
            <option selected>Kategori</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}"> {{$category->name}}</option>
            @endforeach
          </select>
      </div>


      <div class="input-dashboard ">
        <label for="">Cover</label>
        <img  class="cover-preview img-fluid" alt="">
        <input type="file" class="form-control  @error('cover') is-invalid @enderror " id="cover" name="cover" onchange="previewCover()" >
        @error('cover')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>

    <div class="input-dashboard">
        <label for="images">Gambar</label>
        <input type="file" class="form-control  @error('image') is-invalid @enderror "
            id="images" name="images[]" multiple>
        @error('images')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

      <div class="input-dashboard">
        <label for="material">Bahan</label>
        <input type="text" class="form-control  @error('material') is-invalid @enderror " id="material" name="material" placeholder="Bahan"  required autofocus >
        @error('material')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>

      <div class="input-dashboard">
        <label for="size">Ukuran</label>
        <input type="text" class="form-control  @error('size') is-invalid @enderror " id="size" name="size" placeholder="Ukuran"  required autofocus >
        @error('size')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>

      <div class="input-dashboard">
        <label for="year">Tahun</label>
        <input type="text" class="form-control @error('year') is-invalid @enderror " id="year" name="year" placeholder="Tahun"  required autofocus >
        @error('year')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>

    <div class="input-dashboard">
        <label for="description">Deskripsi</label>
        <input id="description" type="hidden" name="description" class="form-control @error('description') is-invalid @enderror ">
        <trix-editor input="description"></trix-editor>
        @error('description')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>


    <div class="input-dashboard">
        <label for="category">Kategori</label>
        <select class="form-select mb-3 " name="status_id">
            <option selected>Status</option>
            @foreach($statuses as $status)
            <option value="{{  $status->id }}"> {{ $status->name }} </option>
            @endforeach

          </select>
    </div>


      <button type="submit" class="red-button">Submit</button>

    </form>
  </section>

</div>

@include('components.footer')

<script>
const title = document.querySelector('#title');
const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/admin/artworks/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.prevenDefault();
        })

    function previewImage() {

    const image = document.querySelector('#images');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }

    }
    function previewCover() {

    const image = document.querySelector('#cover');
    const imgPreview = document.querySelector('.cover-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }

    }
    </script>
@endsection
