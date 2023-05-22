@extends('layouts.main')

@section('content')
    <div class="d-flex">
        @include('components.sidebar')

        <section id="table_event" class="admin-form">
            <a href="/admin/events/create"><button class="red-button mb-35">Buat Event Baru</button><a>
                    <table class="table">
                        <thead class="red text-white">
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center" style="width: 10%;">Judul</th>
                                <th scope="col" class="text-center" style="width: 10%;">Deskripsi</th>
                                <th scope="col" class="text-center" style="width: 10%;">Gambar</th>
                                <th scope="col" class="text-center">Lokasi</th>
                                <th scope="col" class="text-center">Tahun</th>
                                <th scope="col" class="text-center">Waktu</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-based">
                            <?php $no = 1; ?>
                            @foreach ($events as $event)
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td>{{ $event->title }}</td>
                                    <td class="text">{{ $event->description }}</td>
                                    <td><img style="width: 50px;" src="{{ $event->image }}" alt=""></td>
                                    <td>{{ $event->location }}</td>
                                    <td>{{ $event->date }}</td>
                                    <td>{{ $event->time }}</td>
                                    <td class="d-flex">
                                        <a href="/admin/events/edit/{{ $event->id }}" class="red-button"
                                            style="font-size: 10px;">Edit</a>
                                        <form action="/admin/events/delete/{{ $event->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="red-button mx-2"
                                                style="font-size: 10px;">Hapus</button>
                                        </form>
                                        <a href="/events/show/{{ $event->id }}" class="red-button"
                                            style="font-size: 10px;">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
        </section>
    </div>

    @include('components.footer')
@endsection
