@extends('layouts.main')

@section('content')
    <main id="main">
        <!-- ======= Gallery Single Section ======= -->
        <section id="gallery-single" class="admin-content">
            <div class="container">

                <div class="position-relative h-50">
                    <div class="slides-1 portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img style="max-height: 500px;"
                                    class="img-fluid mx-auto d-block
                                "
                                    src="{{ asset('storage/image-events/' . $event->cover) }}" alt="">
                            </div>

                            @foreach ($image_events as $image_event)
                                <div class="swiper-slide">
                                    <img style="max-height: 500px;" class="img-fluid mx-auto d-block"
                                        src="{{ asset('storage/image-events/' . $image_event->image) }}" alt="">
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
                            <h1>{{ $event->title }}</h1>
                            <p>
                                {!! $event->content !!}
                            </p>


                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="portfolio-info">
                            <ul>
                                <li class="mb-4">Lokasi<h5><strong>{{ $event->location }}</strong> </h5>
                                </li>
                                <li class="mb-4">Tanggal Event<h5><strong>{{ $event->date_event }}</strong> </h5>
                                </li>
                                <li class="mb-4">Waktu<h5><strong>{{ $event->time }}</strong> </h5>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Single Section -->

    </main>

    @include('components.footer')
@endsection
