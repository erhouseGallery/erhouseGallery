@extends('layouts.main')

@section('content')
    <main id="main" class="container">

        <!-- ======= Artikel ======= -->
        <div class="article">
            <div class="row my-4">
                <h4>Event Terbaru</h4>
            </div>

            {{-- <div class="row">
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
            </div> --}}

            <div class="row">
                @foreach ($events as $event)
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                        <a href="/events/show/{{ $event->slug }}">
                            <div class="card text-white card-has-bg click-col"
                                style="background-image:url('{{ asset('storage/image-events/' . $event->cover) }}');">
                                <img class="card-img d-none" src="{{ asset('storage/image-events/' . $event->cover) }}"
                                    alt="">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="card-body">
                                        <small class="card-meta mb-2">{{ $event->location }}</small>
                                        <h4 class="card-title mt-0 "><a class="text-white"
                                                herf="/events/show/{{ $event->slug }}">{{ $event->title }}</a></h4>
                                        <small><i class="far fa-clock"></i> {{ $event->date_event }}</small>
                                    </div>
                                    <div class="card-footer">
                                        <div class="media">
                                            <img class="mr-3 rounded-circle"
                                                src="https://assets.codepen.io/460692/internal/avatars/users/default.png"
                                                alt="Generic placeholder image" style="max-width:50px">
                                            <div class="media-body">
                                                <h6 class="my-0 text-white d-block">Ruswanto</h6>
                                                <small>Founder Erhouse Gallery</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Artikel -->

        {{ $events->links() }}
    </main>

    @include('components.footer')
@endsection
