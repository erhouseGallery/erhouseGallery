
@extends('layouts.main')

@section('content')
    <main id="main" data-aos="fade" data-aos-delay="500">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Patung (16 karya)</h2>
                        <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas
                            consequatur ut a
                            odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat
                            ipsum
                            dolorem.</p>

                        <a class="cta-btn" href="contact.html">Available for hire</a>

                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center">

                    @foreach ($karyas as $item)


                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="gallery-single.html" class="details-link">{{ $item["judul"] }}</a>
                            </div>
                        </div>
                        <a href="" class="text-center"><h1>selancar</h1></a>
                    </div><!-- End Gallery Item -->
                    @endforeach


                </div>

            </div>
        </section><!-- End Gallery Section -->

    </main>

    @include('components.footer')
@endsection
