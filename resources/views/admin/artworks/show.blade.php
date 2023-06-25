@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="detail_karya" class="admin-content">
    <h2 class="mb-3 black">Detail Karya</h2>
    <div class="line-title mb-6"></div>

        <div class="position-relative h-20">
            <div class="slides-1 portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                    @foreach ($image_artworks as $image_artwork )
                    <div class="swiper-slide">
                        <img class="img-fluid mx-auto d-block" src="{{ asset('storage/image-artworks/' . $image_artwork->image) }}" alt="" style="max-height: 400px">
                    </div>
                        @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gx-1 " style="margin-top: 120px">

            <div class="col-lg-8 ">
                <div class="">
                    <h1>{{$artwork->title}}</h1>
                    <p>
                        {!! $artwork->description !!}
                    </p>
                </div>
            </div>

            <div class="col-lg-3" >
                <div class="">
                    <h2>{{ $artwork->Category->name }}</h2>
                    <div class="line-category"></div>
                    <ul>
                        <li>Ukuran<h5> <strong> {{$artwork->size}}</strong> </h5></li>
                        <li>Bahan<h5> <strong> {{$artwork->material}}</strong> </h5></li>
                        <li>Tahun<h5> <strong> {{$artwork->year}}</strong> </h5></li>
                        <button class="btn-create">{{ $artwork->status->name }} </button>
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


