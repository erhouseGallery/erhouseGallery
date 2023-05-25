@extends('layouts.main')
@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="buat_karya" class="admin-form">
    <h2 class="mb-15 black">Buat Karya</h2>
    <form method="post" action="/admin/artworks">
        @csrf
      <div class="mb-3">
        <input type="text" class="form-control @error('title') is-invalid @enderror border-16" id="title" name="title" placeholder="Judul" required autofocus>
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
                </div>
        @enderror
      </div>


       <div class="form-group mb-3">
        <textarea name="description" class="form-control @error('description') is-invalid @enderror border-16" id="description" name="description" class="form-control border-16 " rows="5" placeholder="Deskripsi"  required autofocus ></textarea>
        @error('description')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>


      <select class="form-select mb-3 border-16" name="category_id" >
        <option selected>Status</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}"> {{$category->name}}</option>
        @endforeach
      </select>

      {{-- <div class="input-group mb-3 ">
        <input type="file" class="form-control  @error('image') is-invalid @enderror border-16" id="image" name="image">
        @error('image')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div> --}}

      <div class="mb-3">
        <input type="text" class="form-control  @error('material') is-invalid @enderror border-16" id="material" name="material" placeholder="Bahan"  required autofocus >
        @error('material')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>

      <div class="mb-3">
        <input type="text" class="form-control  @error('size') is-invalid @enderror border-16" id="size" name="size" placeholder="Ukuran"  required autofocus >
        @error('size')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>

      <div class="mb-3">
        <input type="text" class="form-control @error('year') is-invalid @enderror border-16" id="year" name="year" placeholder="Tahun"  required autofocus >
        @error('year')
        <div class="invalid-feedback">
            {{ $message }}
            </div>
    @enderror
    </div>



      <select class="form-select mb-3 border-16" name="status_id">


        <option selected>Status</option>
        @foreach($statuses as $status)
        <option value="{{  $status->id }}"> {{ $status->name }} </option>
        @endforeach

      </select>

      <button type="submit" class="red-button">Submit</button>

    </form>
  </section>
</div>

@include('components.footer')
@endsection
