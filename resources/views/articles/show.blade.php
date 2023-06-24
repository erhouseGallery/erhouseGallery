@extends('layouts.main')

@section('content')
<main id="main" data-aos="fade" data-aos-delay="500">

    <!-- ======= Gallery Single Section ======= -->
    <section id="gallery-single" class="gallery-single page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{$article->title}}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on {{$article->date}}</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{$article->content}}
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
