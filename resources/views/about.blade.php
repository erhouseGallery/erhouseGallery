@extends('layouts.main')

@section('content')
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about page-header">
            <div class="container">
                <div class="row gy-4 justify-content-center my-1">
                    <div class="col-lg-4">
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 content">
                        <h2>Erhouse Gallery</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Lokasi:</strong> <span>Ngeblak,
                                            Wijirejo, Kec. Pandak, Bantul, DIY</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Instagram:</strong>
                                        <span>@roes_antoe</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>raartsrus84@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="py-3">
                            Erhouse Gallery merupakan galeri seni yang terletak di Bantul, Yogyakarta. Galeri ini dikenal
                            karena menampilkan karya seni lukis dan patung yang menginspirasi. Dari lukisan-lukisan yang
                            indah hingga patung-patung yang mengagumkan, Erhouse Gallery menawarkan pengalaman seni yang tak
                            terlupakan bagi para pengunjungnya. Jika Anda memiliki minat dalam seni lukis atau seni patung,
                            galeri ini adalah tempat yang sempurna untuk dikunjungi.
                        </p>
                    </div>
                </div>

                <div class="row gy-4 justify-content-center my-1">
                    <div class="col-lg-4">
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 content">
                        <h2>Ruswanto</h2>
                        <p class="py-3">
                            Pemilik Erhouse Gallery adalah seorang seniman bernama Ruswanto. Ia memiliki dedikasi yang
                            tinggi dalam memajukan dunia seni di Yogyakarta. Dengan nomor kontaknya yang dapat dihubungi di
                            085228836199 dan akun Instagram @roes_antoe, Ruswanto selalu siap untuk berbagi karyanya dengan
                            penggemar seni dan menjawab pertanyaan terkait galeri. Ia menjadi penggerak utama di balik
                            keberhasilan Erhouse Gallery dan senantiasa menginspirasi para seniman dan pengunjung dengan
                            visi artistiknya yang unik.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Nomer :</strong>
                                        <span>085228836199</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Instagram:</strong>
                                        <span>@roes_antoe</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>raartsrus84@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <section>
            <!-- ======= End Page Header ======= -->
            <div class="mt-5 mb-5 d-flex align-items-center">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2>Hubungi Kami</h2>
                            <p>Sampaikan Pesan Anda. Kami ingin mendengar tanggapan, pertanyaan, atau saran Anda. Isi
                                formulir di bawah ini dan
                                tim kami akan merespons secepatnya.</p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-lg-3 mb-3">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Lokasi :</h4>
                                    <a href="https://goo.gl/maps/XxyMKNLnvXjugiDk7" target="_blank"
                                        rel="noopener noreferrer">
                                        <p>Ngeblak, Wijirejo, Kec. Pandak, Kabupaten Bantul</p>
                                    </a>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-3 mb-3">
                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <a href="mailto:raartsrus84@gmail.com" target="_blank" rel="noopener noreferrer">
                                        <p>raartsrus84@gmail.com</p>
                                    </a>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-3 mb-3">
                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Nomer :</h4>
                                    <a href="http://wa.me/6285228836199" target="_blank" rel="noopener noreferrer">
                                        <p>085228836199</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <div class="info-item d-flex">
                                <i class="bi bi-instagram flex-shrink-0"></i>
                                <div>
                                    <h4>Instagram:</h4>
                                    <a href="https://www.instagram.com/roes_antoe/" target="_blank"
                                        rel="noopener noreferrer">
                                        <p>roes_antoe</p>
                                    </a>
                                </div>
                            </div>
                    </div>

                    <!--<div class="row justify-content-center mt-4">-->

                    <!--    <div class="col-lg-9 mb-4">-->
                    <!--        <form action="forms/contact.php" method="post" role="form" class="php-email-form">-->
                    <!--            <div class="row">-->
                    <!--                <div class="col-md-6 form-group">-->
                    <!--                    <input type="text" name="name" class="form-control" id="name"-->
                    <!--                        placeholder="Nama Kamu" required>-->
                    <!--                </div>-->
                    <!--                <div class="col-md-6 form-group mt-3 mt-md-0">-->
                    <!--                    <input type="email" class="form-control" name="email" id="email"-->
                    <!--                        placeholder="Email Kamu" required>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--            <div class="form-group mt-3">-->
                    <!--                <input type="text" class="form-control" name="subject" id="subject"-->
                    <!--                    placeholder="Subject" required>-->
                    <!--            </div>-->
                    <!--            <div class="form-group mt-3">-->
                    <!--                <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>-->
                    <!--            </div>-->
                    <!--            <div class="my-3">-->
                    <!--                <div class="loading">Loading</div>-->
                    <!--                <div class="error-message"></div>-->
                    <!--                <div class="sent-message">Your message has been sent. Thank you!</div>-->
                    <!--            </div>-->
                    <!--            <div class="text-center"><button type="submit">Kirim Pesan</button></div>-->
                    <!--        </form>-->
                    <!--    </div>-->
                        <!-- End Contact Form -->

                    <!--</div>-->

                </div>
            </section>
        </section>
    </main>

    @include('components.footer')
@endsection
