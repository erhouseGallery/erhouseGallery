@extends('layouts.main')

@section('content')
    <main id="main" data-aos="fade" data-aos-delay="500">
        <section id="gallery-single" class="gallery-single page-header">
            <div class="container">

                <div class="position-relative h-100">
                    <div class="slides-1 portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide" style="max-height: 500px; overflow:hidden">
                                <img src="../../../cover/{{ $event->cover }}" alt="{{ $event->title }}">
                            </div>
                            @foreach ($images as $image)
                                <div class="swiper-slide" style="max-height: 500px; overflow:hidden">
                                    <img src="../../../images/{{ $image->image }}" alt="{{ $image->image }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

                <div class="row justify-content-between gy-4 mt-4">

                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2>{{ $event->title }}</h2>
                            <p>{{ $event->description }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="portfolio-info">
                            <h3>Detail Event</h3>
                            <ul>
                                <li><strong>Lokasi</strong> <span>{{ $event->location }}</span></li>
                                <li><strong>Tahun</strong> <span>{{ $event->date }}</span></li>
                                <li><strong>Waktu</strong> <span>{{ $event->time }}</span></li>
                                <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Gallery Single Section -->

    </main>

    @include('components.footer')
@endsection
