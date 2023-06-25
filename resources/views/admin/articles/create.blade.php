@extends('layouts.main')

@section('content')

<div class="d-flex">
@include('components.sidebar')

<section id="buat_karya" class="admin-content">
    <h2 class="mb-3 black">Buat Artikel</h2>
    <div class="line-title mb-6"></div>
    <form method="post" action="/admin/articles" enctype="multipart/form-data" class="form-dashboard">
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


    <div class="input-dashboard-trix-editor">
        <label for="content">Konten</label>
        <input id="content" class="form-control-trix-editor @error('content') is-invalid @enderror" type="hidden" name="content" class="form-control @error('content') is-invalid @enderror border-16">
        <trix-editor input="content" class="" ></trix-editor>
        @error('content')
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
