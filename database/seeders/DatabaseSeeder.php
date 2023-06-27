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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'number' => '081234567890',
            'address' => 'Jalan merdeka No.45 Yogyakarta',
            'password' => bcrypt('12345'),
            'avatar' => 'https://api.dicebear.com/6.x/adventurer/svg?seed=Cookie',
            'is_admin' => true,


        ]);

        User::create([
            'name' => 'user1',
            'email' => 'user@gmail.com',
            'number' => '080987654321',
            'address' => 'Jalan merdeka No.45 Yogyakarta',
            'password' => bcrypt('12345'),
            'avatar' => 'https://api.dicebear.com/6.x/adventurer/svg?seed=Cookie',
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
