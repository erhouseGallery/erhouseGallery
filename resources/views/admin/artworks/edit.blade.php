@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="edit_karya" class="admin-form">
    <h2 class="mb-15">Edit Karya</h2>

    <form method="post" action="/admin/artworks/{{ $artwork->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
      <div class="mb-3">
        <input type="text" class="form-control @error('title') is-invalid @enderror border-16" id="title" placeholder="Judul" name="title" required autofocus value="{{ old('title', $artwork->title) }}">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>
      <div class=" mb-3">
        <input type="text" id="description" name="description"  class="form-control @error('description') is-invalid @enderror border-16 " rows="5" placeholder="Deskripsi" required autofocus value="{{ old('description', $artwork->description) }}">
        @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>


    <div class="input-group mb-3" id="frame" >
        <input type="hidden" name="oldImage" value="{{ $artwork->image }}">
        @if ($artwork->image)
        <img src="{{ asset('storage/' . $artwork->image) }}" alt="" class="img-preview">
        @else
        <img  class="img-preview img-fluid" alt="">
        @endif
        <input type="file" class="form-control @error('image') is-invalid @enderror border-16" id="image" name="image" onchange="previewImage()" >
        @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

      <select class="form-select mb-3 border-16" aria-label="Default select example" required autofocus name="category_id" id="category_id">
       @foreach($categories as $category)
       @if(old('category_id', $artwork->category_id === $category->id))
       <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
       @endif
       <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @endforeach
      </select>

      <div class="mb-3">
        <input type="text" class="form-control @error('year') is-invalid @enderror border-16" id="year" name="year" placeholder="Tahun" required autofocus value="{{ old('year', $artwork->year) }}">
        @error('year')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
      <div class="mb-3">
        <input type="text" class="form-control @error('material') is-invalid @enderror border-16" id="material" name="material" placeholder="Tahun" required autofocus value="{{ old('year', $artwork->material) }}">
        @error('material')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

      <div class="mb-3">
        <input type="text" class="form-control @error('size') is-invalid @enderror border-16" id="size" name="size" placeholder="Ukuran" required autofocus value="{{ old('size', $artwork->size) }}">
        @error('size')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>


    <select class="form-select mb-3 border-16" aria-label="Default select example" required autofocus name="status_id" id="status_id">
        @foreach($statuses as $status)
        @if(old('status_id', $artwork->status_id === $status->id))
        <option value="{{ $status->id }}" selected>{{ $status->name }}</option>
        @endif
        <option value="{{ $status->id }}" selected>{{ $status->name }}</option>
         @endforeach
       </select>
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


