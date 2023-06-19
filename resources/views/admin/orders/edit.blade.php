@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="edit_pesanan" class="admin-content">
    <h2 class="mb-3 black">Edit Pesanan</h2>
    <div class="line mb-6"></div>


    <div class="input-dashboard">
        <label for="title">Nama Pemesan</label>
        <h2>{{ $order->user->name}}</h2>
    </div>
    <div class="input-dashboard">
        <label for="title">Nama Pesanan</label>
        <h2>{{ $order->user->name}}</h2>
    </div>
    <div class="input-dashboard">
        <label for="title">Kategori</label>
        <h2>{{ $order->category->name}}</h2>
    </div>
    <div class="input-dashboard">
        <label for="title">Kategori</label>
        <h5>{!! $order->description !!}</h5>
    </div>

    <form method="post" action="/admin/orders/{{ $order->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf

    <select class="form-select mb-3 border-16" aria-label="Default select example" required autofocus name="information_id" id="information_id">
        @foreach($information as $info)
            <option value="{{ $info->id }}" {{ (old('information_id', $order->information_id) == $info->id) ? 'selected' : '' }}>
                {{ $info->name }}
            </option>
        @endforeach
    </select>


       <div class=" mb-3">
        <input type="text" id="note" name="note"  class="form-control @error('note') is-invalid @enderror border-16 " rows="5" placeholder="Catatan" required autofocus value="{{ old('note', $order->note) }}">
        @error('note')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

      <button type="submit" class="btn-submit">Submit</button>

    </form>
  </section>

</div>


@include('components.footer')

<script>
function previewImage() {

const image = document.querySelector('#image');
const imgPreview = document.querySelector('.img-preview');

imgPreview.style.display = 'block';

const oFReader = new FileReader();
oFReader.readAsDataURL(image.files[0]);

oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
}

}
</script>

@endsection


