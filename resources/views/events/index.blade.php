@extends('layouts.main')

@section('content')
    <main id="main" class="container">


        <section class="events">


        </section>

        <div class="container mt-5">


            <div class="row my-4">
                @foreach ($events as $event)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="card mb-4 mb-xl-0 card-hover border">
                            <a class="img-card" href="/events/show/{{ $event->slug }}">
                                <img src="{{ asset('storage/image-events/' . $event->cover) }}" alt=""
                                    class="img-fluid w-100 rounded-top-3 image-article">
                            </a>
                            <div class="card-body">
                                <h3 class="card-title mb-4 text-truncate">
                                    <a href="/events/show/{{ $event->slug }}" class=""
                                        style="text-decoration :none ;">{{ $event->title }} </a>
                                </h3>
                                <div class="mb-4">
                                    <div class="mb-3 lh-1">
                                        <span class="me-1">
                                            <i class="bi bi-geo-alt"></i>
                                        </span>
                                        <span>{{ $event->location }}</span>
                                    </div>
                                    <div class="mb-3 lh-1">
                                        <span class="me-1">
                                            <i class="bi bi-calendar-check"></i>
                                        </span>
                                        <span>{{ $event->date_event }}</span>
                                    </div>
                                    <div class="lh-1">
                                        <span class="me-1">
                                            <i class="bi bi-clock"></i>

                                        </span>
                                        <span>{{ $event->time }}</span>
                                    </div>
                                </div>
                                <a href="/events/show/{{ $event->slug }}" style="text-decoration: none; color: white;"
                                    class="btn-event">Lihat
                                    Event</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        {{ $events->links() }}
    </main>

    @include('components.footer')
@endsection
