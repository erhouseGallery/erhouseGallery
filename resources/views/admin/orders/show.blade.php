@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.main')

@section('content')
    <div class="d-flex">
        @include('components.sidebar')

        <section id="edit_pesanan" class=" admin-content">
            <h2 class="mb-3 black">Detail Pesanan</h2>
            <div class="line mb-6"></div>



            <h4><b>Data Pemesan </b></h4>
            <div class="table-responsive">
                <table class="table-dashboard  table  table-striped table-hover ">
                    <thead class="thead-dashboard">
                        <tr>
                            <th class="text-center">
                                <p>Nama</p>
                            </th>
                            <th class="text-center">
                                <p> Email</p>
                            </th>
                            <th class="text-center">
                                <p>Nomor </p>
                            </th>
                            <th class="text-center">
                                <p>Alamat </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">{{ $order->user->name }}</td>
                            <td class="text-center">{{ $order->user->email }}</td>
                            <td class="text-center">{{ $order->user->number }}</td>
                            <td class="text-center">{{ $order->user->address }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>




            <br><br>
            <h4><b>Data Pemesanan </b></h4>

            <div class="table-responsive">
                <table class="table-dashboard table table-striped table-hover">
                    <thead class="thead-dashboard">
                        <tr>
                            <th class="text-center">
                                <p>Nama Pesanan</p>
                            </th>
                            <th class="text-center">
                                <p>Kategori </p>
                            </th>
                            <th class="text-center">
                                <p>Deskripsi </p>
                            </th>
                            <th class="text-center">
                                <p>Informasi </p>
                            </th>
                            <th class="text-center">
                                <p>Catatan </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">{{ $order->order_name }}</td>
                            <td class="text-center">{{ $order->category->name }}</td>
                            <td class="text-center">{!! $order->description !!}</td>
                            <td class="text-center">{{ $order->information->name }}</td>
                            <td class="text-center">{{ $order->note }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <br>


            <label for="title">
                <h5>Gambar/Sketsa </h5>
            </label>
            <div class="position-relative h-20">
                <div class="slides-1 portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        {{-- @foreach ($image_orders as $image_order)
                            <div class="swiper-slide ">
                                <img src="{{ asset('storage/image-orders/' . $image_order->image) }}" alt=""
                                    class="img-fluid mx-auto d-block" style="max-height: 400px">
                            </div>
                        @endforeach --}}

                        @foreach ($image_orders as $image_order)
                            <div class="swiper-slide">
                                @php
                                    $image_path = 'public/image-orders/' . $image_order->image;
                                    $image_exists = Storage::exists($image_path);
                                    dd($image_exists);
                                @endphp
                                @if ($image_exists)
                                    <img src="{{ asset('storage/image-orders/' . $image_order->image) }}" alt=""
                                        class="img-fluid mx-auto d-block" style="max-height: 400px">
                                @else
                                    <img src="{{ asset('storage/image-artworks/' . $image_order->image) }}" alt=""
                                        class="img-fluid mx-auto d-block" style="max-height: 400px">
                                @endif
                            </div>
                        @endforeach


                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>








        </section>

    </div>


    @include('components.footer')

    <script>
        function previewImage() {

            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }

        }
    </script>
@endsection
