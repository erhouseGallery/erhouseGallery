@extends('layouts.main')

@section('content')
    <main id="main" data-aos="fade" data-aos-delay="500">
        <!-- ======= Gallery Single Section ======= -->
        <section id="gallery-single" class="gallery-single page-header">
            <div class="container">

                <div class="position-relative h-50">
                    <div class="slides-1 portfolio-details-slider swiper">


                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/gallery/gallery-13.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

                <div class="row justify-content-between gy-4 mt-4">

                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h1>{{$artwork->title}}</h1>
                            <p>
                                {{$artwork->description}}
                            </p>


                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="portfolio-info">
                            <h3>{{ $artwork->Category->name }}</h3>
                            <ul>
                                <li><strong>Ukuran</strong> <h5> {{$artwork->size}}</h5></li>
                                <li><strong>Bahan</strong> <h5> {{$artwork->material}}</h5></li>
                                <li><strong>Tahun</strong> <h5> {{$artwork->year}}</h5></li>
                                <li><a href="#" class="btn-visit align-self-start">{{ $artwork->status->name }}</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Single Section -->

    </main>

    @include('components.footer')
@endsection
