@extends('layouts.main')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2><span>Erhouse Gallery</span> adalah Galery Seni Dua dan Tiga Dimensi dari Yogyakarta</h2>
                    <p>Erhouse Gallery adalah sebuah galeri seni yang didedikasikan untuk memamerkan karya seni lukisan dan
                        patung yang dihasilkan oleh seorang seniman yang bernama Ruswanto. Seniman ini dikenal karena
                        keahliannya dalam menciptakan karya seni dengan berbagai motif yang menarik dan unik.</p>
                    <a href="/artworks" class="btn-get-started">Lihat Lebih Banyak Karya Seni</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery mb-5">
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center">
                    @foreach ($artworks as $artwork)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('storage/image-artworks/' . $artwork->cover) }}" class="img-fluid"
                                    alt="">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="/artworks/{{ $artwork->slug }}" class="details-link">{{ $artwork->title }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
        <!-- End Gallery Section -->

    </main>
    <!-- End #main -->
    @include('components.footer')
@endsection
