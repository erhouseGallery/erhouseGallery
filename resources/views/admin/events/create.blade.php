@extends('layouts.main')

@section('content')
    <div class="d-flex">
        @include('components.sidebar')

        <section id="buat_event" class="admin-form">
            <h2 class="mb-35">Buat Event</h2>
            <form action="/admin/events/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control border-16" id="title" placeholder="Judul" name="title">
                </div>
                <div class="form-group mb-3">
                    <textarea name="description" id="description" class="form-control border-16 " rows="5" placeholder="Deskripsi"></textarea>
                </div>
                <div class="input-group mb-3 ">
                    <input type="file" class="form-control border-16" id="image" name="image" multiple>
                </div>


                <div class="mb-3">
                    <input type="text" class="form-control border-16" id="location" placeholder="Lokasi"
                        name="location">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control border-16" id="date" placeholder="Tahun" name="date">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control border-16" id="time" placeholder="Waktu" name="time">
                </div>

                <button type="submit" class="red-button">Submit</button>

            </form>
        </section>
    </div>

    @include('components.footer')
@endsection
