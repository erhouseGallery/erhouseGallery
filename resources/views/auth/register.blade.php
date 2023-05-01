@extends('layouts.main')

@section('content')
    <section id="main" data-aos="fade" data-aos-delay="500">
        <div class="container page-header login-register">
            <div class="row justify-content-sm-center">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo"
                            width="100">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h3 class="card-title fw-bold mb-4">Buat akun anda</h3>
                            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                <div class="mb-4">
                                    <label class="mb-2 text-muted" for="name">Nama</label>
                                    <input id="name" type="text" class="form-control" name="name" value=""
                                        required autofocus>
                                </div>

                                <div class="mb-4">
                                    <label class="mb-2 text-muted" for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value=""
                                        required autofocus>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="mb-2 w-100">
                                        <label class="text-muted" for="password">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn w-100 btn-lg">
                                        Daftar
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Sudah mempunyai akun? <a href="login.html" class="text-primary">Masuk akun
                                    sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
@endsection
