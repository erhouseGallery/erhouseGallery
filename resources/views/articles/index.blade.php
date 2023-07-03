@extends('layouts.main')

@section('content')
    <main id="main">

        <section class="articles">
            <div class="container mt-5">

                <div class="row my-4">
                    @foreach ($articles as $article)
                        <div class="col-lg-4 col-md-6 mb-5">
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
                                    <a href="/articles/show/{{ $article->slug }}" class="btn btn-link btn-block"
                                        style="text-decoration: none; color : #7d0b1e;">
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


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
