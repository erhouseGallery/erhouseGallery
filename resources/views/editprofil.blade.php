@extends('layouts.main')

@section('content')
    @include('components.sidebar')

    <div class="main-content ">
        <div class="row mt-5 mx-5">
            <div class="col-5">
                <h1>Edit Profil</h1>
                <form action="" class="mt-3">
                    <input type="text" placeholder="Nama" class="form-control input-pesanan mt-3">
                    <input type="text" placeholder="Email" class="form-control input-pesanan mt-3">
                    <input type="text" placeholder="Nomor" class="form-control input-pesanan mt-3">
                    <input type="file" placeholder="Nama" class="form-control input-pesanan mt-3">
                    <textarea style="height: 100px" placeholder="Nama" class="form-control input-pesanan mt-3"> </textarea>
                    <button type="submit btn-lg" class="btn text-light mt-2" style="background-color: #AF1616">
                        Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
