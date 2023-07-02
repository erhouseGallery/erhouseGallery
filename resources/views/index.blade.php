@extends('layouts.main')

@section('content')




<section id="hero" class="containter-fluid">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-caption container">
                <h1 class="text-caption"> <b style="color: #af1616;  text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.8);"> Erhouse Gallery </b>  adalah rumah untuk berproses kreatif karya seni lukisan dan patung</h1>
            </div>
          <div class="carousel-item active">
            <img src="assets/img/hero1.png" class="img-hero d-block w-100 img-fluid" alt="..." >
          </div>
          <div class="carousel-item">
            <img src="assets/img/hero2.png" class="img-hero d-block w-100 img-fluid" alt="...">
          </div>
        </div>
      </div>
</section>


<section>


</section>





    <main id="main">
        <section id="gallery" class="gallery ">
            <div class="container-fluid mb-4">

                <div class="row gy-4  justify-content-center">
                    @foreach ($artworks as $artwork)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('storage/image-artworks/' . $artwork->cover) }}" class="img-fluid"
                                    alt="">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="/artworks/{{ $artwork->slug }}" class="details-link">{{ $artwork->title }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </section>


            <section id="service">
                <div class="container">
                    <h1 class="text-center text-bold my-5">Layanan</h1>
                    <div class="row">

                        <div class="col-lg-4 col-md-12 my-md-4 ">

                            <div class="box-service text-center">
                                <img src="assets/img/icon1.png" alt="" style="width: 120px">
                                <h3 class="my-3"><b> Galleri Karya Seni</b></h3>
                                <p class="">Menampilkan karya seni lukisan dan patung, sharing tentang seni dengan artikel dan berbagi aktivitas seni </p>
                            </div>


                        </div>
                        <div class="col-lg-4 col-md-12 my-md-4 ">
                            <div class="box-service text-center">
                                <img src="assets/img/icon2.png" alt="" style="width: 120px">
                                <h3 class="my-3"><b>Pesan Karya Seni Yang Tersedia</b></h3>
                                <p class="">Memesan karya seni lukisan dan patung yang tersedia </p>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-12 my-md-4 my-xs-4">
                            <div class="box-service text-center">
                                <img src="assets/img/icon3.png" alt="" style="width: 120px">
                                <h3 class="my-3"><b>Pesan Karya Seni Lukisan dan Patung Custom</b></h3>
                                <p class="">Memesan karya seni lukisan dan patung sesuai permintaan atau request </p>
                            </div>


                        </div>
                </div>
                </div>
            </section>


            <section id="answer">
                <div class="container">
                    <h1 class="text-center text-bold my-5">Pertanyaan Umum</h1>
                    <div class="row">
                        <div class="col-lg-6 text-center ">

                            <p>
                                <button class="btn-dropdown " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#pertanyaan1" aria-expanded="false" aria-controls="pertanyaan1">
                                    Apa itu Erhouse Gallery ?
                                </button>
                            </p>
                            <div class="collapse" id="pertanyaan1">
                                <div class="card card-body mb-2">
                                    Erhouse Gallery adalah rumah untuk berproses kreatif karya seni dua dimensi atau lukisan dan tiga dimensi atau patung. Erhouse Gallery beralamat di Ngeblak RT 02 WIjirejo Pandak Bantul Yogyakarta.
                                </div>
                            </div>

                    </div>
                        <div class="col-lg-6 ">
                             <div>
                            <p>
                                <button class="btn-dropdown " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#pertanyaan2" aria-expanded="false" aria-controls="pertanyaan2">
                                    Karya Seni apa saja yang ada di Erhouse Gallery ?
                                </button>
                            </p>
                            <div class="collapse" id="pertanyaan2">
                                <div class="card card-body mb-2">
                                    Karya Seni dua dimensi atau lukisan dan karya seni tiga dimensi atau patung
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 ">
                                <div>
                                    <p>
                                        <button class="btn-dropdown " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#pertanyaan3" aria-expanded="false" aria-controls="pertanyaan3">
                                            Bagaimana cara pesan karya yang tersedia ?
                                        </button>
                                    </p>
                                    <div class="collapse" id="pertanyaan3">
                                        <div class="card card-body mb-2">
                                            <ul style="list-style-type:number; padding :12px">
                                                <li>Pilih karya seni lukisan atau patung</li>
                                                <li>Klik detail karya seni dan periksa di sisi kanan Availble atau Sold (Jika Available karya seni dapat dipesan , jika sold tidak dapat dipesan)</li>
                                                <li>Klik tombol Available lalu akan diarahkan ke login jika anda belum login, apabila sudah login maka akan diarahkan dashboard</li>
                                                <li>Jika pesan karya seni sudah terdaftar dalam tabel, anda dapat menunggu informasi dan nanti akan dihubungi admin melalui kontak yang terdaftar</li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        <div class="col-lg-6 ">
                            <div>
                                <p>
                                    <button class="btn-dropdown " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#pertanyaan4" aria-expanded="false" aria-controls="pertanyaan4">
                                        Bagaimana cara pesan karya custom ?
                                    </button>
                                </p>
                                <div class="collapse" id="pertanyaan4">
                                    <div class="card card-body mb-2">
                                        <ul style="list-style-type:number; padding :12px">
                                            <li>Login ke Dashboard User, Jika belum punya akun silahkan Daftar dahulu</li>
                                            <li>Pilih Menu Pesanan, lalu klik tombol Buat Pesanan Baru</li>
                                            <li>Masukan data-data yang dibutuhkan dan Submit data-data tersebut</li>
                                            <li>Jika pesan karya seni sudah terdaftar dalam tabel, anda dapat menunggu informasi dan nanti akan dihubungi admin melalui kontak yang terdaftar</li>
                                        </ul>
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>





                </div>
            </section>


            </div>


    </main>
    <!-- End #main -->
    @include('components.footer')
@endsection
