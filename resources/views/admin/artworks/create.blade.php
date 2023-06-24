@extends('layouts.main')
@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="buat_karya" class="admin-content">
    <h2 class="mb-3 black">Buat Karya</h2>
    <div class="line mb-6"></div>
    <form method="post" action="/admin/artworks" enctype="multipart/form-data" class="form-dashboard">
        @csrf
      <div class="input-dashboard">
        <label for="title">Judul</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror border-16" id="title" name="title" placeholder="Judul" required autofocus>
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
                </div>
        @enderror
      </div>


      <div class="input-dashboard">
        <input type="text" class="form-control @error('slug') is-invalid @enderror border-16" id="slug" name="slug" placeholder="judul for url" required autofocus disabled>
        @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
                </div>
        @enderror
      </div>

      <div class="input-dashboard">
        <label for="category">Kategori</label>
        <select class="form-select mb-3 border-16 " name="category_id" required autofocus>
            <option disabled selected hidden >Kategori</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}"> {{$category->name}}</option>
            @endforeach
          </select>
      </div>


      <div class="input-dashboard ">
        <label for="">Cover</label>
        <img  class="cover-preview img-fluid w-50" alt="">
        <input type="file" class="form-control-file  @error('cover') is-invalid @enderror border-16" id="cover" name="cover" onchange="previewCover()" required autofocus>
        @error('cover')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>

    <div class="input-dashboard">
        <label for="images">Gambar</label>
        <input type="file" class="form-control-file  @error('image') is-invalid @enderror border-16"
            id="images" name="images[]" multiple required autofocus>
        @error('images')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

      <div class="input-dashboard">
        <label for="material">Bahan</label>
        <input type="text" class="form-control  @error('material') is-invalid @enderror border-16" id="material" name="material" placeholder="Bahan"  required autofocus >
        @error('material')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>

      <div class="input-dashboard">
        <label for="size">Ukuran</label>
        <input type="text" class="form-control  @error('size') is-invalid @enderror border-16" id="size" name="size" placeholder="Ukuran"  required autofocus >
        @error('size')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>

      <div class="input-dashboard">
        <label for="year">Tahun</label>
        <input type="text" class="form-control @error('year') is-invalid @enderror border-16" id="year" name="year" placeholder="Tahun"  required autofocus >
        @error('year')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>

    <div class="input-dashboard-trix-editor">
        <label for="description">Deskripsi</label>
        <input id="description" class="form-control-trix-editor @error('description') is-invalid @enderror" type="hidden" name="description" class="form-control @error('description') is-invalid @enderror border-16">
        <trix-editor input="description" class="" ></trix-editor>
        @error('description')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>


    <div class="input-dashboard">
        <label for="category">Status</label>
        <select class="form-select mb-3 border-16" name="status_id" required autofocus>
            <option disabled selected hidden>Status</option>
            @foreach($statuses as $status)
            <option value="{{  $status->id }}"> {{ $status->name }} </option>
            @endforeach
          </select>
    </div>

    <div class="input-dashboard">
        <label for="year">Harga</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror border-16" id="price" name="price" placeholder="price"  required autofocus >
        @error('price')
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


    // previw image
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

    //preview cover
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
