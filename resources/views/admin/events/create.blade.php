@extends('layouts.main')

@section('content')
    <div class="d-flex">
        @include('components.sidebar')

        <section id="buat_event" class="admin-form">
            <h2 class="mb-35">Buat Event</h2>
            <form action="/admin/events/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control border-16 @error('title') is-invalid @enderror" id="title"
                        placeholder="Judul" name="title" value="{{ old('title') }}" required>
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control border-16 @error('slug') is-invalid @enderror" id="slug"
                        placeholder="slug" name="slug" value="{{ old('slug') }}" required>
                </div>

                <div class="form-group mb-3">
                    <textarea name="description" id="description" class="form-control border-16 @error('description') is-invalid @enderror"
                        rows="5" placeholder="Deskripsi" required> {{ old('description') }}</textarea>
                </div>

                <div class="input-group mb-3 ">
                    <label class="input-group-text border-16" for="cover">Cover</label>
                    <input type="file" class="form-control border-16" id="cover" name="cover">
                </div>

                <div class="input-group mb-3 ">
                    <label class="input-group-text border-16" for="images">Gambar</label>
                    <input type="file" class="form-control border-16" id="images" name="images[]" multiple>
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control border-16 @error('location') is-invalid @enderror"
                        id="location" placeholder="Lokasi" name="location" value="{{ old('location') }}" required>
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control border-16 @error('date') is-invalid @enderror" id="date"
                        placeholder="Tahun" name="date" value="{{ old('date') }}" required>
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control border-16 @error('time') is-invalid @enderror" id="time"
                        placeholder="Waktu" name="time" value="{{ old('time') }}" required>
                </div>

                <button type="submit" class="red-button">Submit</button>
            </form>
        </section>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/admin/events/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>

    @include('components.footer')
@endsection
