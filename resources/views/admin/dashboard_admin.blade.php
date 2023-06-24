@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="dashboard" class="admin-content">
    <h2 class="mb-35 black">Selamat Datang {{auth()->user()->name}} </h2>
    <div class="d-flex flex-wrap gap-4">
      <div class="box col-md-4">
        @can('admin')
        <h1 class="text-center">{{ $artworks->count()}}</h1>
        <h3 class="text-center">Total Karya</h3>
      </div>
      <div class="box col-md-4">
        <h1 class="text-center">{{  $articles->count()}}</h1>
        <h3 class="text-center">Total Artikel</h3>
      </div>
      <div class="box col-md-4">
        <h1 class="text-center">{{  $events->count()}}</h1>
        <h3 class="text-center">Total Event</h3>
      </div>
      @endcan
      <div class="box col-md-4">
        <h1 class="text-center">{{  $orders->count()}}</h1>
        <h3 class="text-center">Total Pesanan</h3>
      </div>
    </div>
  </section>
</div>

{{-- @include('components.footer') --}}
@endsection
