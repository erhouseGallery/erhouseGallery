@extends('layouts.main')

@section('content')
    <main id="main">
        <!-- ======= Gallery Single Section ======= -->
        <section id="gallery-single" class="gallery-single page-header">
            <div class="container">

                <div class="position-relative h-50">
                    <div class="slides-1 portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide" style="max-height: 500px; overflow:hidden">
                                <img src="{{ asset('storage/image-events/' . $event->cover) }}" alt="">
                            </div>

                            @foreach ($image_events as $image_event)
                                <div class="swiper-slide" style="max-height: 500px; overflow:hidden">
                                    <img src="{{ asset('storage/image-events/' . $image_event->image) }}" alt="">
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
                                {{ strip_tags($event->content) }}
                            </p>


                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="portfolio-info">
                            <ul>
                                <li><strong>Lokasi</strong>
                                    <h5> {{ $event->location }}</h5>
                                </li>
                                <li><strong>Tanggal</strong>
                                    <h5> {{ $event->date_event }}</h5>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>

    @include('components.footer')
@endsection
