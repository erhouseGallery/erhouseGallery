@extends('layouts.main')

@section('content')
<div class="d-flex">
  @include('components.sidebar')

  <section id="edit_pesanan" class="admin-content">
    <h2 class="mb-3 black">Edit Pesanan</h2>
    <div class="line mb-6"></div>



    <h4><b>Data Pemesan </b></h4>
    <table class="table-dashboard   table table-striped table-hover ">
        <thead class="thead-dashboard">
            <tr>
                <th class="text-center" > <p>Nama</p> </th>
                <th class="text-center" ><p> Email</p></th>
                <th class="text-center" ><p>Nomor </p> </th>
                <th class="text-center" > <p>Alamat </p> </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">{{ $order->user->name}}</td>
                <td class="text-center">{{ $order->user->email}}</td>
                <td class="text-center">{{ $order->user->number}}</td>
                <td class="text-center">{{ $order->user->address}}</td>
            </tr>
        </tbody>
    </table>



    <br><br>
    <h4><b>Data Pemesanan </b></h4>


    <table class="table-dashboard  table table-striped table-hover">
        <thead class="thead-dashboard">
            <tr>
                <th class="text-center" > <p>Nama Pesanan</p> </th>

                <th class="text-center" > <p>Kategori </p> </th>
                <th class="text-center" > <p>Deskripsi </p> </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">{{ $order->order_name}}</td>
                <td class="text-center">{{ $order->category->name}}</td>
                <td class="text-center">{!! $order->description !!}</td>
            </tr>
        </tbody>
    </table>
    <br>


        <label for="title">Gambar/Sketsa</label>
        <div class="position-relative h-20" style="width: 600px">
            <div class="slides-1 portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                    @foreach ($image_orders as $image_order )
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/image-orders/' . $image_order->image) }}" alt="" style="max-width: 600px;" >
                    </div>
                        @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>








    <form method="post" action="/admin/orders/{{ $order->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <label for="title">Informasi</label>
    <select class="form-select mb-3 border-16" aria-label="Default select example" required autofocus name="information_id" id="information_id">
        @foreach($information as $info)
            <option value="{{ $info->id }}" {{ (old('information_id', $order->information_id) == $info->id) ? 'selected' : '' }}>
                {{ $info->name }}
            </option>
        @endforeach
    </select>



       <div class=" mb-3">
        <label for="title">catatan</label>
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


