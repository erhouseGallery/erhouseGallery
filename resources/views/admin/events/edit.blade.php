@extends('layouts.main')

@section('content')
    <div class="d-flex">
        @include('components.sidebar')

        <section id="edit_event" class="admin-form">
            <h2 class="mb-15">Edit Event</h2>
            <form action="/admin/events/update/{{ $event->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <input type="text" name="title" class="form-control border-16" id="title" placeholder="Judul"
                        value="{{ $event->title }}">
                </div>
                <div class="form-group mb-3">
                    <textarea name="description" id="description" class="form-control border-16 " rows="5" placeholder="Deskripsi">{{ $event->description }}</textarea>
                </div>
                <div class="input-group mb-3 ">
                    @if ($event->image)
                        <input src="{{ asset('storage/' . $event->image) }}" type="file" class="form-control border-16"
                            id="image" name="image">
                    @else
                        <input type="file" class="form-control border-16" id="image" name="image">
                    @endif
                </div>


                <div class="mb-3">
                    <input type="text" class="form-control border-16" id="location" name="location" placeholder="Lokasi"
                        value="{{ $event->location }}">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control border-16" id="date" name="date"
                        value="{{ $event->date }}" placeholder="Tahun">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control border-16" id="time" name="time"
                        value="{{ $event->time }}" placeholder="Waktu">
                </div>

                <button type="submit" class="red-button">Submit</button>

            </form>
        </section>
    </div>
    @include('components.footer')
@endsection
