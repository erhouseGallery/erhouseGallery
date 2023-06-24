@extends('layouts.main')

@section('content')
    <div class="d-flex">
        @include('components.sidebar')

        <section id="edit_event" class="admin-content">
            <h2 class="mb-3 black">Edit Event</h2>
            <div class="line mb-6"></div>
            <form method="post" action="/admin/events/{{ $event->slug }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="input-dashboard">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror border-16" id="title"
                        placeholder="Judul" name="title" required autofocus value="{{ old('title', $event->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-dashboard">
                    <input type="text" class="form-control @error('slug') is-invalid @enderror border-16" id="slug"
                        name="slug" placeholder="slug" required autofocus value="{{ old('slug', $event->slug) }}">
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-dashboard ">
                    <label for="">Cover</label> <br>
                    <input type="hidden" name="oldCover" value="{{ $event->cover }}">
                    @if ($event->cover)
                        <img src="{{ asset('storage/events-image/' . $event->cover) }}" alt=""
                            class="cover-preview w-50">
                    @else
                        <img class="cover-preview img-fluid w-50" alt="">
                    @endif
                    <input type="file" class="form-control-file  @error('cover') is-invalid @enderror border-16"
                        id="cover" name="cover" onchange="previewCover()">
                    @error('cover')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-dashboard">
                    <label for="images">Gambar</label>
                    <input type="file" class="form-control  @error('image') is-invalid @enderror border-16"
                        id="images" name="images[]" multiple>
                    @error('images')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-dashboard-trix-editor">
                    <label for="content">Deskripsi</label>
                    <input id="content" type="hidden" name="content" value="{{ old('content', $event->content) }}">
                    <trix-editor input="content"></trix-editor>
                    @error('content')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-dashboard">
                    <label for="location">Lokasi</label>
                    <input type="text" class="form-control @error('location') is-invalid @enderror border-16"
                        id="location" placeholder="Lokasi" name="location" required autofocus
                        value="{{ old('location', $event->location) }}">
                    @error('location')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-dashboard">
                    <label for="date_event">Tanggal</label>
                    <input type="date" class="form-control @error('date_event') is-invalid @enderror border-16"
                        id="date_event" placeholder="Tanggal" name="date_event" required autofocus
                        value="{{ old('date_event', $event->date_event) }}">
                    @error('date_event')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-dashboard">
                    <label for="time">Waktu</label>
                    <input type="time" class="form-control @error('time') is-invalid @enderror border-16" id="time"
                        placeholder="Waktu" name="time" required autofocus value="{{ old('time', $event->time) }}">
                    @error('time')
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
            fetch('/admin/events/checkSlug?title=' + title.value)
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
