@extends('layouts.main')

@section('content')
    @include('components.sidebar')

    <div class="main-content mt-5">
        <div class="row mt-5 mx-5">
            <div class="col-12">
                <h1>Profil</h1>

                <div class="row">
                    <div class="card-profil col-xl-6 col-md-12 ">
                        <img style="width: 30%" src="/sketsa.png" class="rounded-circle " alt="">
                        <table class="mt-3">
                            <tr>
                                <th>Nama : </th>
                                <th>Irfannudin Ihsan</th>
                            </tr>
                            <tr>
                                <th>Email : </th>
                                <th>irfannudinihsan56@gmail.com</th>
                            </tr>
                            <tr>
                                <th>Nomor : </th>
                                <th>085831008476</th>
                            </tr>
                        </table>
                        <button type="button btn-lg" class="btn text-light mt-2" style="background-color: #AF1616">
                            Edit</button>
                    </div>
                </div>


            </div>
        </div>

    </div>
@endsection
