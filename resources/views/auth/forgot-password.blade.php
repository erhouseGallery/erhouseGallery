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
                            <h3 class="card-title fw-bold mb-4">Lupa Password</h3>
                            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                <div class="mb-4">
                                    <label class="mb-2 text-muted" for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value=""
                                        required autofocus>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn w-100 btn-lg">
                                        Kirim Link
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Belum mempunyai akun? <a href="register.html" class="text-primary">Buat akun
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
