@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="edit_karya" class="admin-content">
    <h2 class="mb-3 black">Edit Karya</h2>
    <div class="line mb-6"></div>
    <form method="post" action="/admin/artworks/{{ $artwork->slug }}" enctype="multipart/form-data">
        @method('put')
        @csrf
      <div class="input-dashboard">
        <label for="title">Judul</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror border-16" id="title" placeholder="Judul" name="title" required autofocus value="{{ old('title', $artwork->title) }}">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="input-dashboard">
        <input type="text" class="form-control @error('slug') is-invalid @enderror border-16" id="slug" name="slug" placeholder="slug" required autofocus value="{{ old('slug', $artwork->slug) }}" >
        @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
                </div>
        @enderror
      </div>


      <div class="input-dashboard">
        <label for="category">Kategori</label>
        <select class="form-select mb-3 border-16" aria-label="Default select example" required autofocus name="category_id" id="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ (old('category_id', $artwork->category_id) == $category->id) ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
      </div>

      <div class="input-dashboard ">
        <label for="">Cover</label> <br>
        <input type="hidden" name="oldCover" value="{{ $artwork->cover }}">
        @if($artwork->cover)
        <img src="{{ asset('storage/image-artworks/' . $artwork->cover) }}" alt="" class="cover-preview w-50">
        @else
        <img  class="cover-preview img-fluid w-50"  alt="">
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


    <div class="input-dashboard">
        <label for="material">Bahan</label>
        <input type="text" class="form-control @error('material') is-invalid @enderror border-16" id="material" name="material" placeholder="Tahun" required autofocus value="{{ old('year', $artwork->material) }}">
        @error('material')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="input-dashboard">
        <label for="size">Ukuran</label>
        <input type="text" class="form-control @error('size') is-invalid @enderror border-16" id="size" name="size" placeholder="Ukuran" required autofocus value="{{ old('size', $artwork->size) }}">
        @error('size')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

      <div class="input-dashboard">
        <label for="year">Tahun</label>
        <input type="text" class="form-control @error('year') is-invalid @enderror border-16" id="year" name="year" placeholder="Tahun" required autofocus value="{{ old('year', $artwork->year) }}">
        @error('year')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="input-dashboard-trix-editor">
        <label for="description">Deskripsi</label>
        <input id="description" type="hidden" name="description" class="form-control-trix-editor @error('description') is-invalid @enderror border-16" required autofocus value="{{ old('description', $artwork->description) }}">
        <trix-editor input="description"></trix-editor>
        @error('description')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>

    <div class="input-dashboard">
        <label for="category">Status</label>
        <select class="form-select mb-3 border-16" aria-label="Default select example" required autofocus name="status_id" id="status_id">
            @foreach($statuses as $status)
                <option value="{{ $status->id }}" {{ (old('status_id', $artwork->status_id) == $status->id) ? 'selected' : '' }}>
                    {{ $status->name }}
                </option>
            @endforeach
        </select>

    </div>

    <div class="input-dashboard">
        <label for="year">Harga</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror border-16" id="price" name="price" placeholder="price"  required autofocus value="{{ old('price', $artwork->price)  }}" >
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


