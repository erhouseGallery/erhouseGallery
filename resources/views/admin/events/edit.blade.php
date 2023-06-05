@extends('layouts.main')

@section('content')
    <div class="d-flex">
        @include('components.sidebar')

        <section id="edit_event" class="admin-form">
            <h2 class="mb-15">Edit Event</h2>
            <div class="row d-flex">
                <div class="col-lg-8">
                    <form action="/admin/events/update/{{ $event->slug }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <input type="text" class="form-control border-16 @error('title') is-invalid @enderror"
                                id="title" placeholder="Judul" name="title" value="{{ old('title', $event->title) }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control border-16 @error('slug') is-invalid @enderror"
                                id="slug" placeholder="slug" name="slug" value="{{ old('slug', $event->slug) }}"
                                required>
                        </div>

                        <div class="form-group mb-3">
                            <textarea name="description" id="description" class="form-control border-16 @error('description') is-invalid @enderror"
                                rows="5" placeholder="Deskripsi" required>{{ old('description', $event->description) }}</textarea>
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
                                id="location" placeholder="Lokasi" name="location"
                                value="{{ old('location', $event->location) }}" required>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control border-16 @error('date') is-invalid @enderror"
                                id="date" placeholder="Tahun" name="date" value="{{ old('date', $event->date) }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control border-16 @error('time') is-invalid @enderror"
                                id="time" placeholder="Waktu" name="time" value="{{ old('time', $event->time) }}"
                                required>
                        </div>

                        <button type="submit" class="red-button">Submit</button>
                    </form>
                </div>

                <div class="col-lg-4">
                    <p class="text-center">Cover :</p>
                    <form method="post" action="/admin/events/edit/deleteCover/{{ $event->slug }}">
                        <button class="btn text-danger items-center d-block mx-auto">X</button>
                        @csrf
                        @method('delete')
                    </form>
                    <img src="../../../cover/{{ $event->cover }}" alt="{{ $event->title }}"
                        class="img-fluid d-block mx-auto" style="max-width: 100px;">

                    <p class="mt-4 text-center">Gambar :</p>
                    @foreach ($images as $image)
                        <form method="post" action="/admin/events/edit/deleteImage/{{ $image->id }}">
                            <button class="btn text-danger d-block mx-auto">X</button>
                            @csrf
                            @method('delete')
                        </form>
                        <img src="../../../images/{{ $image->image }}" alt="{{ $event->title }}"
                            class="img-fluid d-block mx-auto" style="max-width: 100px;">
                    @endforeach
                </div>
            </div>
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
