<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Article;
use App\Models\Artwork;
use App\Models\Category;
use App\Models\Status;
use App\Models\Order;
use App\Models\Information;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // seeder User
        User::create([
            'name' => 'Admin Erhouse Gallery',
            'email' => 'admin@erhousegallery.com',
            'number' => '085228836199',
            'address' => 'Ngeblak RT 02, Desa Wijirejo, Kecamatan Pandak, Kabupaten Bantul, Daerah Istimewa Yogyakarta',
            'password' => bcrypt('12345zxcvbnm'),
            'avatar' => 'https://i.ibb.co/4fntgXr/logo-only.png',
            'is_admin' => true,


        ]);

        User::create([
            'name' => 'user1',
            'email' => 'user@gmail.com',
            'number' => '080987654321',
            'address' => 'Jalan merdeka No.45 Yogyakarta',
            'password' => bcrypt('12345'),
            'avatar' => 'https://i.ibb.co/4fntgXr/logo-only.png',
            'is_admin' => false,

        ]);

        // seeder Category
        Category::create([
            'name' => 'Lukisan',
        ]);

        Category::create([
            'name' => 'Patung',
        ]);

        // seeder Status
        Status::create([
            'name' => 'Available',
        ]);

        Status::create([
            'name' => 'Sold',
        ]);


        // seeder information
        Information::create([
            'name' => 'Sedang Pengecekan'
        ]);
        Information::create([
            'name' => 'Ditolak'
        ]);

        Information::create([
            'name' => 'Diterima'
        ]);
    }
}
