@extends('layouts.main')

@section('content')
    <section id="main">
        <div class="container page-header login-register">
            <div class="row justify-content-sm-center">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9 mb-5">
                    <div class="text-center my-5">
                        <h4>Erhouse Gallery</h4>
                    </div>

                    {{-- alert jika berhasil registrasi --}}
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- alert jika gagal login --}}
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                        </div>
                    @endif


                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h3 class="card-title fw-bold mb-4">Masuk ke akun anda</h3>
                            <form method="post" class="needs-validation" novalidate="" autocomplete="off">
                                @csrf
                                <div class="mb-4">
                                    <label class="mb-2 text-muted" for="email">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="" required autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <div class="mb-2 w-100">
                                        <label class="text-muted" for="password">Password</label>
                                    </div>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required>

                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <a href="" class="float-end text-primary my-3">
                                        Lupa password?
                                    </a>
                                </div>

                                <div class="align-items-center">
                                    <button type="submit" class="btn login-button w-100 btn-lg">
                                        Masuk
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Belum mempunyai akun? <a href="/aregister" class="text-primary">Buat akun
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
