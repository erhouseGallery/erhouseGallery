@extends('layouts.main')

@section('content')
    <div class="d-flex">
        @include('components.sidebar')

        <section id="detail_karya" class="admin-content">
            <h2 class="mb-3 black">Detail Artikel</h2>
            <div class="line-title mb-6"></div>

            <div class="position-relative h-20">
                <div class="slides-1 portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        @foreach ($image_events as $image_event)
                            <div class="swiper-slide">
                                <img class="img-fluid mx-auto d-block"
                                    src="{{ asset('storage/image-events/' . $image_event->image) }}" alt=""
                                    style="max-height: 400px">
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>

            <div class="row justify-content-between gx-1" style="margin-top: 120px">

                <div class="col-lg-8">
                    <div class="">
                        <h1>{{ $event->title }}</h1>
                        <p>
                            {!! $event->content !!}
                        </p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="">
                        <ul>
                            <li class="mb-3">tanggal event :<h5> <strong> {{ $event->date_event }}</strong> </h5>
                            </li>
                            <li class="mb-3">Lokasi :<h5> <strong> {{ $event->location }}</strong> </h5>
                            </li>
                            <li class="mb-3">Waktu :<h5> <strong> {{ $event->time }}</strong> </h5>
                            </li>
                            <li class="mb-3">Dibuat pada : <h5> <strong>{{ $event->created_at }}</strong> </h5>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>


        </section>

    </div>


    @include('components.footer')

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/admin/artworks/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.prevenDefault();
        })

        function previewImage() {

            const image = document.querySelector('#images');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }

        }

        function previewCover() {

            const image = document.querySelector('#cover');
            const imgPreview = document.querySelector('.cover-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }

        }
    </script>
@endsection
