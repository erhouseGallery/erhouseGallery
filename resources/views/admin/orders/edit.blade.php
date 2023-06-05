@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="edit_karya" class="admin-form">
    <h2 class="mb-15">Edit Karya</h2>

    <form method="post" action="/admin/orders/{{ $order->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
      <div class="mb-3">
        <input type="text" class="form-control @error('order_name') is-invalid @enderror border-16" id="title" placeholder="Nama Pesanan" name="order_name" required autofocus value="{{ old('order_name', $order->order_name) }}" disabled>
        @error('order_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <select class="form-select mb-3 border-16" aria-label="Default select example" required autofocus name="category_id" id="category_id" disabled>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ (old('category_id', $order->category_id) == $category->id) ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>


      <div class=" mb-3">
        <input type="text" id="description" name="description"  class="form-control @error('description') is-invalid @enderror border-16 " rows="5" placeholder="Deskripsi" required autofocus value="{{ old('description', $order->description) }}" disabled>
        @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

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

      <button type="submit" class="red-button">Submit</button>

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


