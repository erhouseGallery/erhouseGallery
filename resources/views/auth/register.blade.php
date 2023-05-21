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
                            <form action="/register" method="post" class="needs-validation" novalidate="" autocomplete="off">
                                @csrf
                                <div class="mb-4">
                                    <label class="mb-2 text-muted" for="name">Nama</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror " name="name" value=""
                                        required autofocus>
                                        @error('name')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="mb-2 text-muted" for="email">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email" value=""
                                        required autofocus>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 text-muted" for="email">Nomor</label>
                                    <input id="number" type="text" class="form-control @error('number') is-invalid @enderror" name="number" value=""
                                        required autofocus>
                                    @error('number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <div class="mb-2 w-100">
                                        <label class="text-muted" for="password">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                    @error('password')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
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
