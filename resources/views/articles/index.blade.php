@extends('layouts.main')

@section('content')

    <main id="main" class="container">

        <!-- ======= Artikel ======= -->
        <div class="article">
            <div class="row my-4">
                <h4>Artikel Terbaru</h4>
            </div>

            <div class="row">
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
            </div>
        </div>
        <!-- Artikel -->

    {{ $articles->links() }}
</main>

@include('components.footer')


@endsection
