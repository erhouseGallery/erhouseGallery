@extends('layouts.main')

@section('content')



<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <h2>Erhouse Gallery adalah rumah untuk berproses kreatif karya lukisan dan patung</h2>
        <p>Erhouse Gallery menjadi galeri karya seni milik Ruswanto yang memiliki karya seni lukisan dan patung. Sebagai ruang aktivitas mengekspresikan seni, dan menjadi wadah bagaimana keinginan diwujudkan dalam karya seni.  </p>
        <img src="assets/img/ruswanto.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
    </div>
  </div>





    {{-- <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2>Erhouse Gallery adalah rumah untuk berproses kreatif karya lukisan dan patung</h2>
                    <p>Erhouse Gallery menjadi galeri karya seni milik Ruswanto yang memiliki karya seni lukisan dan patung. Sebagai ruang aktivitas mengekspresikan seni, dan menjadi wadah bagaimana keinginan diwujudkan dalam karya seni.  </p>
                    <a href="/artworks" class="btn-get-started">Lihat Lebih Banyak Karya Seni</a>
                </div>
            </div>
        </div>
    </section> --}}


    <main id="main">

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery mb-5">
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center">
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
                    {{ $artworks->links() }}
                </div>

                <div class="container">
                    <h2 class="text-center text-bold my-5">Pertanyaan Yang Sering Diajukan</h2>
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
            </div>
        </section>

    </main>
    <!-- End #main -->
    @include('components.footer')
@endsection
