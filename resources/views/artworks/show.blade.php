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
                                <img style="max-height: 500px;" class="img-fluid mx-auto d-block
                                " src="{{ asset('storage/image-artworks/' . $artwork->cover) }}" alt="">
                            </div>

                            @foreach ($image_artworks as $image_artwork)
                                <div class="swiper-slide">
                                    <img style="max-height: 500px;" class="img-fluid mx-auto d-block" src="{{ asset('storage/image-artworks/' . $image_artwork->image) }}"
                                        alt="">
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
                            <h1>{{ $artwork->title }}</h1>
                            <p>
                                {!! $artwork->description !!}
                            </p>


                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="portfolio-info">
                            <h3>{{ $artwork->Category->name }}</h3>
                            <ul>
                                <li><strong>Ukuran</strong>
                                    <h5> {{ $artwork->size }}</h5>
                                </li>
                                <li><strong>Bahan</strong>
                                    <h5> {{ $artwork->material }}</h5>
                                </li>
                                <li><strong>Tahun</strong>
                                    <h5> {{ $artwork->year }}</h5>
                                </li>
                                <li><strong>Harga</strong>
                                    <h5> {{ $artwork->price }}</h5>
                                </li>
                                <li>
                                    @if ($artwork->status->name == 'Available')
                                        <form action="/artworks/{{ $artwork->slug }}/buy" method="post">
                                            @csrf
                                            <button class="btn-visit ctn-btn align-self-start border-0 bg-success"
                                                type="submit">{{ $artwork->status->name }}</button>
                                        </form>
                                    @else
                                        <button
                                            class="btn-create">{{ $artwork->status->name }}</button>
                                    @endif
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
