@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="dashboard" class="admin-form">
    <h2 class="mb-35 black">Dashboard Admin</h2>
    <div class="d-flex gap-4">
      <div class="box">
        <h1>11</h1>
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
      <div class="box">
        <h1>2</h1>
        <h3>Total Pesanan</h3>
      </div>
    </div>
  </section>
</div>

@include('components.footer')
@endsection
