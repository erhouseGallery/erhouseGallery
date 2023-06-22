@extends('layouts.main')

@section('content')
    <main id="main">

        <!-- ======= Gallery Single Section ======= -->
        <section id="gallery-single" class="gallery-single page-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <article>
                            <header class="mb-4">
                                <h1 class="fw-bolder mb-1">{{ $event->title }}</h1>
                                <div class="text-muted fst-italic mb-2">Posted on {{ $event->date }}</div>
                                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                            </header>
                            <figure class="mb-4"><img class="img-fluid rounded"
                                    src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                            <section class="mb-5">
                                <p class="fs-5 mb-4">{{ $event->content }}
                                </p>
                            </section>
                        </article>
                    </div>
                </div>
        </section>
    </main>

    @include('components.footer')
@endsection
