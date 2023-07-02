@extends('layouts.main')

@section('content')
    <main id="main">

            <div class="container mt-5">
                <div class="col-lg-4 d-block mx-auto">
                    <form action="/artworks">
                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="cari karya.." name="search"
                                value="{{ request('search') }}">
                            <button class="btn-search" type="submit">cari</button>
                        </div>
                    </form>
                </div>

                <div class="col mt-4 text-center">

                        <a style="text-decoration: none; color : white" href="/artworks" class="btn-artworks">Semua</a>
                        <a style="text-decoration: none; color : white" href="/artworks/categories/Patung" class="btn-artworks">Patung</a>
                        <a style="text-decoration: none; color : white" href="/artworks/categories/Lukisan" class="btn-artworks">Lukisan</a>

                </div>
            </div>

        <section id="gallery" class="gallery">
            <div class="container-fluid mb-4">

                <div class="row gy-4 justify-content-center">
                    @if ($artworks->count() > 0)
                        @foreach ($artworks as $artwork)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="{{ asset('storage/image-artworks/' . $artwork->cover) }}" class="img-fluid"
                                        alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="/artworks/{{ $artwork->slug }}"
                                            class="details-link">{{ $artwork->title }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h4 class="text-center">data tidak ditemukan, silahkan kembali</h4>
                    @endif
                </div>
                <div class="mx-auto mt-5">
                    {{ $artworks->links() }}
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')
@endsection
