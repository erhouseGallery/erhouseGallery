@extends('layouts.main')

@section('content')
<div class="d-flex">
@include('components.sidebar')

<section id="buat_karya" class="admin-content">
  <h2 class="mb-3 black">Edit Profile</h2>
  <div class="line-title mb-6"></div>
  <form method="post" action="/admin/profiles/update/{{$user->id}}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="input-dashboard">
        <label for="name">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror border-16" id="name" name="name" placeholder="nama" required autofocus value="{{ old('name', $user->name) }}">
    @error('name')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    </div>
    <div class="input-dashboard">
        <label for="email">Email</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror border-16" id="email" name="email" placeholder="email" required autofocus value="{{ old('email', $user->email) }}">
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    </div>
    <div class="input-dashboard">
        <label for="number">Nomor</label>
      <input type="text" class="form-control @error('number') is-invalid @enderror border-16" id="number" name="number" placeholder="nomor" required autofocus value="{{ old('number', $user->number) }}">
    @error('number')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    </div>

    <div class="input-dashboard">
        <label for="address">Alamat</label>
      <input type="text" class="form-control @error('address') is-invalid @enderror border-16" id="address" name="address" placeholder="alamat" required autofocus value="{{ old('address', $user->address) }}">
    @error('address')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    </div>

    <div class="input-dashboard">
        <label for="password">Password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror border-16" id="password" name="password" placeholder="Password"  autofocus value="">
    @error('address')
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
