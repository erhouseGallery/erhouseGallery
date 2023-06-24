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





        <h1>{{$user->name }}</h1>
        <h1>{{$user->email }}</h1>
        <h1>{{$user->number }}</h1>

        <button id="btn-action-edit" class="btn-action mx-2" ><a href="/admin/profiles/edit/{{ $user->id }}" style="text-decoration: none; color : inherit">edit</a></button>










</section>
</div>

@include('components.footer')
@endsection
