@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="detail_karya" class="admin-content">
    <h2 class="mb-3 black">Detail Artikel</h2>
    <div class="line mb-6"></div>

        <div class="position-relative h-20" style="width: 600px">
            <div class="slides-1 portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                    @foreach ($image_events as $image_event )
                    <div class="swiper-slide">
                        <img class="img-fluid w-100" src="{{ asset('storage/image-events/' . $image_event->image) }}" alt="">
                    </div>
                        @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4" style="margin-top: 120px">

            <div class="col-lg-8">
                <div class="portfolio-description">
                    <p>tanggal buat : {{$event->date}}</p>
                    <h1>{{$event->title}}</h1>
                    <p>
                        {!! $event->content !!}
                    </p>


                </div>
            </div>

            <div class="col-lg-3">
                <div class="portfolio-info">
                    <ul>
                        <li><strong>tanggal event</strong> <h5> {{$event->date_event}}</h5></li>
                        <li><strong>Lokasi</strong> <h5> {{$event->location}}</h5></li>
                        <li><strong>Waktu</strong> <h5> {{$event->time}}</h5></li>
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


