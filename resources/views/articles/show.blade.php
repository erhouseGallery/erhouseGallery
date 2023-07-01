@extends('layouts.main')

@section('content')
    <main id="main">

        <section id="gallery-single" class="gallery-single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <article>
                            <header class="my-4">
                                <h2 class="mb-1">{{ $article->title }}</h2>
                                <div class="text-muted fst-italic mb-2">Dipublikasikan pada {{ $article->date }}</div>
                                {{-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> --}}
                            </header>
                            <div class="slides-1 portfolio-details-slider swiper">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide" style="max-height: 500px; overflow:hidden">
                                        <img src="{{ asset('storage/image-articles/' . $article->cover) }}" alt="">
                                    </div>

                                    @foreach ($image_articles as $image_article)
                                        <div class="swiper-slide" style="max-height: 500px; overflow:hidden">
                                            <img src="{{ asset('storage/image-articles/' . $image_article->image) }}"
                                                alt="">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <section class="my-5">
                                <p class="fs-5 mb-4">{!! $article->content !!}
                                </p>
                            </section>
                        </article>
                    </div>
                </div>
        </section>
        <!-- End Gallery Single Section -->

    </main>

    @include('components.footer')
@endsection
