@extends('layouts.main')

@section('content')
    @include('components.sidebar')

    <div class="main-content mt-5">
        <button type="button btn-lg" class="btn text-light" style="background-color: #AF1616"> Buat Pesanan</button>
        <table class="table-responsive mt-3 ">
            <thead>
                <tr class="">
                    <th class="text-light">No</th>
                    <th class="text-light">Nama</th>
                    <th class="text-light">Nomor</th>
                    <th class="text-light">Alamat</th>
                    <th class="text-light">gambar</th>
                    <th class="text-light">Deskripsi</th>
                    <th class="text-light">Status</th>
                    <th class="text-light">Catatan</th>
                </tr>
            </thead>
            <tbody class="">
                <tr>
                    <td>1</td>
                    <td>Irfannudin Ihsan</td>
                    <td>085831009476</td>
                    <td>Karang Kauman RT 05 Wijirejo Pandak Bantul Yogyakarta</td>
                    <td><img src="/sketsa.png" alt="" class="img-fluid" style="width : 80%"></td>

                    <td>Halo kak, tolong buatkan patung singa seperti gambar atau sketsa yang sama kirimkan. Tolong
                        buatkan dengan bahan perunggu, terima kasih</td>
                    <td>Diterima</td>
                    <td>Pesanan sudah diterima, nanti akan dihubungi admin melalui WA</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Irfannudin Ihsan</td>
                    <td>085831009476</td>
                    <td>Karang Kauman RT 05 Wijirejo Pandak Bantul Yogyakarta</td>
                    <td><img src="/sketsa.png" alt="" class="img-fluid" style="width : 80%"></td>

                    <td>Halo kak, tolong buatkan patung singa seperti gambar atau sketsa yang sama kirimkan. Tolong
                        buatkan dengan bahan perunggu, terima kasih</td>
                    <td>Diterima</td>
                    <td>Pesanan sudah diterima, nanti akan dihubungi admin melalui WA</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Irfannudin Ihsan</td>
                    <td>085831009476</td>
                    <td>Karang Kauman RT 05 Wijirejo Pandak Bantul Yogyakarta</td>
                    <td><img src="/sketsa.png" alt="" class="img-fluid" style="width : 80%"></td>

                    <td>Halo kak, tolong buatkan patung singa seperti gambar atau sketsa yang sama kirimkan. Tolong
                        buatkan dengan bahan perunggu, terima kasih</td>
                    <td>Diterima</td>
                    <td>Pesanan sudah diterima, nanti akan dihubungi admin melalui WA</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Irfannudin Ihsan</td>
                    <td>085831009476</td>
                    <td>Karang Kauman RT 05 Wijirejo Pandak Bantul Yogyakarta</td>
                    <td><img src="/sketsa.png" alt="" class="img-fluid" style="width : 80%"></td>

                    <td>Halo kak, tolong buatkan patung singa seperti gambar atau sketsa yang sama kirimkan. Tolong
                        buatkan dengan bahan perunggu, terima kasih</td>
                    <td>Diterima</td>
                    <td>Pesanan sudah diterima, nanti akan dihubungi admin melalui WA</td>
                </tr>
            </tbody>

        </table>


    </div>
@endsection
