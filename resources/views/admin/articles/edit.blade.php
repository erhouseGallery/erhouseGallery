@extends('layouts.main')

@section('content')
<div class="d-flex">
@include('components.sidebar')

<section id="buat_karya" class="admin-content">
  <h2 class="mb-3 black">Edit Artikel</h2>
  <div class="line mb-6"></div>
  <form method="post" action="/admin/articles/{{$article->slug}}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="input-dashboard">
        <label for="title">Judul</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror border-16" id="title" name="title" placeholder="Judul" required autofocus value="{{ old('title', $article->title) }}">
    @error('title')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    </div>

    <div class="input-dashboard">
        <input type="text" class="form-control @error('slug') is-invalid @enderror border-16" id="slug" name="slug" placeholder="slug" required autofocus value="{{ old('slug', $article->slug) }}" >
        @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
                </div>
        @enderror
      </div>


      <div class="input-dashboard ">
        <label for="">Cover</label> <br>
        <input type="hidden" name="oldCover" value="{{ $article->cover }}">
        @if($article->cover)
        <img src="{{ asset('storage/image-articles/' . $article->cover) }}" alt="" class="cover-preview w-50">
        @else
        <img  class="cover-preview img-fluid w-20"  alt="">
        @endif
        <input type="file" class="form-control-file  @error('cover') is-invalid @enderror border-16" id="cover" name="cover" onchange="previewCover()" >
        @error('cover')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>

    <div class="input-dashboard">
        <label for="images">Gambar</label>
        <input type="file" class="form-control-file  @error('image') is-invalid @enderror border-16"
            id="images" name="images[]" multiple>
        @error('images')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>



    <div class="input-dashboard-trix-editor">
        <label for="content">Konten</label>
        <input id="content" type="hidden" name="content" class="form-control-trix-editor @error('content') is-invalid @enderror border-16" required autofocus value="{{ old('content', $article->content) }}">
        <trix-editor input="content"></trix-editor>
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
