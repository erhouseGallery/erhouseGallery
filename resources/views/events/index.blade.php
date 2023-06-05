@extends('layouts.main')

@section('content')
    <main id="main" data-aos="fade" data-aos-delay="500" class="container">

        <!-- ======= Event ======= -->
        <div class="page-header event">
            <div class="row">
                <h4>Event Terbaru</h4>
            </div>

            <div class="row">
                @foreach ($events as $event)
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light"
                                style="max-height: 200px; overflow:hidden">
                                <img src="../cover/{{ $event->cover }}" class="img-fluid" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{ $event->title }}</h5>
                                <a href="/events/show/{{ $event->slug }}" class="btn border-0">Event Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Event -->
    </main>

    @include('components.footer')
@endsection
