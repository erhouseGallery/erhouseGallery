@extends('layouts.main')

@section('content')
@include('components.sidebar')

<section id="karya" class="ml-30 mr-30 vh-100 pt-65">
  <h2 class="mb-35 mt-65 black">Dashboard Admin</h2>
  <div class="d-flex gap-4">
    <div class="box">
      <h1>10</h1>
      <h3>Total Karya</h3>
    </div>
    <div class="box">
      <h1>15</h1>
      <h3>Total Artikel</h3>
    </div>
    <div class="box">
      <h1>5</h1>
      <h3>Total Event</h3>
    </div>
    <div class="box">
      <h1>2</h1>
      <h3>Total Pesanan</h3>
    </div>
  </div>
</section>

@include('components.footer')
@endsection