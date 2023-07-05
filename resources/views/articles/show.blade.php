@extends('layouts.main')

@section('content')
    <main id="main">

        <section id="article-detail" class="article-detail">
            <div class="container">
                <div class="position-relative h-50">
                    <div class="slides-1 portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center mt-5">
                            <div class="swiper-slide">
                                <img style="max-height: 500px;" class="img-fluid mx-auto d-block"
                                    src="{{ asset('storage/image-articles/' . $article->cover) }}" alt="">
                            </div>

                            @foreach ($image_articles as $image_article)
                                <div class="swiper-slide">
                                    <img style="max-height: 500px;" class="img-fluid mx-auto d-block"
                                        src="{{ asset('storage/image-articles/' . $image_article->image) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

                <div class="row justify-content-center gy-4 mt-4">

                    <div class="col-lg-8">

                        <div>
                            <h2 class="mb-1">{{ $article->title }}</h2>
                            <div class="text-muted fst-italic mb-2">Dipublikasikan pada {{ $article->date }}</div>
                            <p class="fs-5 mb-4">{!! $article->content !!}
                            </p>

                        </div>

                    </div>

                </div>

        </section>
    </main>

    @include('components.footer')
@endsection
