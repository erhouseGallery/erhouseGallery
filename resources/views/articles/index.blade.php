@extends('layouts.main')

@section('content')
    <main id="main" class="container">

        <!-- ======= Artikel ======= -->
        <div class="article">
            <div class="row my-4">
                <h4>Artikel Terbaru</h4>
            </div>

            {{-- <div class="row">
                @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card rounded-2">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <a href="/articles/show/{{ $article->slug }}"><img
                                        src="{{ asset('storage/image-articles/' . $article->cover) }}"
                                        class="img-fluid rounded-2" /></a>
                            </div>
                            <div class="card-body">
                                <a href="/articles/show/{{ $article->slug }}">
                                    <h5 class="card-title font-weight-bold">{{ $article->title }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}

            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="/articles/show/{{ $article->slug }}">
                                <img src="{{ asset('storage/image-articles/' . $article->cover) }}" />
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="/articles/show/{{ $article->slug }}">
                                        {{ $article->title }}
                                    </a>
                                </h4>
                                <p class="takeFewWord">
                                    {!! strip_tags($article->content) !!}
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="/articles/show/{{ $article->slug }}" class="btn btn-link btn-block">
                                    Baca Artikel
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Artikel -->

        {{ $articles->links() }}
    </main>

    <script>
        const takeFewWord = document.querySelectorAll('.takeFewWord');
        takeFewWord.forEach((content) => {
            content.innerHTML = content.innerHTML.slice(0, 100) + '...';
        });
    </script>

    @include('components.footer')
@endsection
