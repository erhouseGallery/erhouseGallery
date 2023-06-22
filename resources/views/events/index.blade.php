@extends('layouts.main')

@section('content')
    <main id="main" class="container">

        <!-- ======= Artikel ======= -->
        <div class="page-header article">
            <div class="row">
                <h4>Event Terbaru</h4>
            </div>

            <div class="row">
                @foreach ($events as $event)
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card rounded-2">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <a href="/events/show/{{ $event->slug }}"><img
                                        src="{{ asset('storage/image-events/' . $event->cover) }}"
                                        class="img-fluid rounded-2" /></a>
                            </div>
                            <div class="card-body">
                                <a href="/events/show/{{ $event->slug }}">
                                    <h5 class="card-title font-weight-bold">{{ $event->title }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Artikel -->

        {{ $events->links() }}
    </main>

    @include('components.footer')
@endsection
