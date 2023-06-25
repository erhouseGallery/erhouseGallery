@extends('layouts.main')

@section('content')

<div class="d-flex">
  @include('components.sidebar')

  <section id="table_artikel" class="admin-content">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <section id="dashboard_profile" class="container admin-content row ">

        <div class="col-lg-4 col-md-12">
            <img  class="rounded-circle mt-3 img-fluid " alt="image"  src="{{ auth()->user()->avatar }} ">
        </div>
        <div class="col-lg-8 col-md-12">

            <table>
                <tr>
                    <td><h6>Nama </h6></td>
                    <td><h6>: {{$user->name }}</h6></td>
                </tr>
                <tr>
                    <td><h6>Email </h6></td>
                    <td><h6>: {{$user->email }}</h6></td>
                </tr>
                <tr>
                    <td><h6>Nomor</h6> </td>
                    <td><h6>: {{$user->number }}</h6></td>
                </tr>
                <tr>
                    <td><h6>Alamat</h6></td>
                    <td><h6>: {{$user->address }}</h6></td>
                </tr>
            </table>


            <button id="btn-action-edit" class="btn-action mx-2" ><a href="/admin/profiles/edit/{{ $user->id }}" style="text-decoration: none; color : inherit">edit</a></button>
        </div>

    </section>















</section>
</div>

@include('components.footer')
@endsection
