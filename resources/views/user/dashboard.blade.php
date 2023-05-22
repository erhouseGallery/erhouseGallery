@extends('layouts.main')

@section('content')
    @include('components.sidebar')

    <div class="main-content mt-5">
        <h1>Hi, Irfannudin Ihsan</h1>
        <div class="row mt-3">
            <div class="col-xl-3 col-md-4">
                <div class="card-data-dashboard text-center w-100 p-4 my-2">
                    <h1 class="text-data-dashboard">1</h1>
                    <p class="text-data-dashboard">Total Pesanan</p>
                </div>

            </div>
            <div class="col-xl-3 col-md-4">
                <div class="card-data-dashboard text-center w-100 p-4 my-2">
                    <h1 class="text-data-dashboard">6</h1>
                    <p class="text-data-dashboard">Pesanan Diterima</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="card-data-dashboard  text-center w-100 p-4 my-2">
                    <h1 class="text-data-dashboard">4</h1>
                    <p class="text-data-dashboard">Pesanan Ditolak</p>
                </div>
            </div>
        </div>
    </div>
@endsection
