@extends('layouts.main')

@section('content')

<div class="d-flex">
@include('components.sidebar')

<section id="buat_karya" class="admin-form">
  <h2 class="mb-15 ">Buat Artikel</h2>
  <form method="post" action="/admin/articles" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="text" class="form-control @error('title') is-invalid @enderror border-16" id="title" name="title" placeholder="Judul" required autofocus>
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
                </div>
        @enderror
      </div>

      <div class="mb-3">
        <input type="text" class="form-control @error('slug') is-invalid @enderror border-16" id="slug" name="slug" placeholder="slug" required autofocus >
        @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
                </div>
        @enderror
      </div>


      <div class="input-group mb-3 ">
        <img  class="img-preview img-fluid" alt="">
        <input type="file" class="form-control  @error('image') is-invalid @enderror border-16" id="image" name="image" onchange="previewImage()" multiple>
        @error('image')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>

      <div class="mb-3">
        <input id="content" type="hidden" name="content" class="form-control @error('content') is-invalid @enderror border-16">
        <trix-editor input="content"></trix-editor>
        @error('content')
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
