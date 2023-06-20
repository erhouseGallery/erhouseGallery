@extends('layouts.main')

@section('content')
    <main id="main" data-aos="fade" data-aos-delay="500">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Patung (16 karya)</h2>
                        <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas
                            consequatur ut a
                            odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat
                            ipsum
                            dolorem.</p>

                        <a class="cta-btn" href="contact.html">Available for hire</a>

                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->

{{-- cari --}}


        <div class="col-md-4">
            <form action="/artworks">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="cari karya.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">cari</button>
                </div>
            </form>
        </div>

        <div class="col-md-12 mt-4">
            <div class="btn-group">
                <a href="/artworks" class="btn btn-primary">Semua</a>
                <a href="/artworks?category=patung" class="btn btn-primary">Patung</a>
                <a href="/artworks?category=lukisan" class="btn btn-primary">Lukisan</a>
            </div>
        </div>



        <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center">
                    @if($artworks->count() > 0)
                    @foreach ($artworks as $artwork)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="{{ asset('storage/image-artworks/' . $artwork->cover) }}" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="gallery-single.html" class="details-link">{{ $artwork["title"] }}</a>
                            </div>
                        </div>
                        <a href="/artworks/{{ $artwork->slug }}" class="text-center"><h1>{{ $artwork["title"] }}</h1></a>
                    </div><!-- End Gallery Item -->
                    @endforeach

                    @else
                    <h1>data tidak ditemukan, silahkan kembali</h1>
                    @endif
                </div>

            </div>
        </section><!-- End Gallery Section -->

        {{ $artworks->links() }}
    </main>

    @include('components.footer')
@endsection
