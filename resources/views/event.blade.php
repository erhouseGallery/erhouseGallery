@extends('layouts.main')

@section('content')
    <main id="main" data-aos="fade" data-aos-delay="500" class="container">

        <!-- ======= Event ======= -->
        <div class="page-header event">
            <div class="row">
                <h4>Event Terbaru</h4>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Event title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="event-single.html" class="btn border-0">Event Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Event title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="#!" class="btn border-0">Event Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Event title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="#!" class="btn border-0">Event Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Event title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="#!" class="btn border-0">Event Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event -->
    </main>

    @include('components.footer')
@endsection
