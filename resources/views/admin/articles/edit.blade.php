@extends('layouts.main')

@section('content')
<div class="d-flex">
@include('components.sidebar')

<section id="buat_karya" class="admin-form">
  <h2 class="mb-15">Edit Artikel</h2>

  <form method="POST" action="/admin/articles/update/{{$article->id}}">
    @csrf
    @method('put')
    <div class="mb-3">
      <input type="text" class="form-control border-16" id="title" name="title" placeholder="Judul" value="{{$article->title}}">
    </div>
    <div class="form-group mb-3">
      <textarea name="description" id="description" class="form-control border-16 " rows="5" placeholder="Deskripsi">{{$article->description}}</textarea>
    </div>
    <div class="input-group mb-3 ">
      <input type="file" class="form-control border-16" id="inputGroupFile02">
    </div>

    <div class="mb-3">
      <input type="text" class="form-control border-16" id="date" name="date" placeholder="Tahun" value="{{$article->date}}">
    </div>

    <button type="submit" class="red-button">Submit</button>
  </form>
</section>
</div>

@include('components.footer')
@endsection