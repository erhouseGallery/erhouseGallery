<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Karya;
use App\Models\Kategori;
use App\Models\Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'nomor' => '08123456789',
            'password' => bcrypt('12345'),
        ]);

        // seeder kategori
        Kategori::create([
            'nama' => 'Lukisan',

        ]);

        Kategori::create([
            'nama' => 'Patung',

        ]);

        //seeder karya
        Status::create([
            'nama' => 'Available',

        ]);
        Status::create([
            'nama' => 'Sold',

        ]);


        Karya::create([
            'judul' => 'matahari cerah',
            'user_id' => 1,
            'kategori_id' => 1,
            'gambar' => 'matahari.jpg',
            'bahan' => 'kanvas',
            'ukuran' => '100cm x 100 cm',
            'tahun' => '2023',
            'deskripsi' => 'matahari ini sangatlah cerah',
            'status_id' => 1,
        ]);

        Karya::create([
            'judul' => 'pria pemberani',
            'user_id' => 1,
            'kategori_id' => 2,
            'gambar' => 'pria.jpg',
            'bahan' => 'semen',
            'ukuran' => '150 cm',
            'tahun' => '2023',
            'deskripsi' => 'pria pemberani tidak pantang menyerah',
            'status_id' => 2,
        ]);
    }
}
