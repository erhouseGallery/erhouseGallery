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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // seeder User
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'number' => '081234567890',
            'address' => 'Jalan merdeka No.45 Yogyakarta',
            'password' => bcrypt('12345'),
            'is_admin' => true,


        ]);

        User::create([
            'name' => 'user1',
            'email' => 'user@gmail.com',
            'number' => '080987654321',
            'address' => 'Jalan merdeka No.45 Yogyakarta',
            'password' => bcrypt('12345'),
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


        // seeder Artwork
        // Artwork::create([
        //     'title' => 'matahari cerah',
        //     'slug' => 'matahari-cerah',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'image' => 'matahari.jpg',
        //     'material' => 'kanvas',
        //     'size' => '100 cm x 100 cm',
        //     'year' => '2020',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu tincidunt odio. Morbi vel consectetur tellus. Suspendisse aliquet facilisis dolor, at finibus purus condimentum sit amet. Integer dapibus, libero vitae sollicitudin convallis, tortor metus vestibulum ligula, eget condimentum dolor purus in ligula. Cras faucibus magna vel metus tempor, vitae ultricies lectus interdum. Sed pellentesque aliquam ipsum, non tempor lectus interdum vel. Suspendisse ac placerat mauris. Vivamus pulvinar ligula vel magna accumsan lobortis. Morbi eu dolor et est venenatis tempor vitae non est. Nunc lobortis nunc ut sem faucibus aliquet. Curabitur eget nisl et erat interdum vulputate. Ut ut aliquet massa.',
        //     'status_id' => 1,
        // ]);

        // Artwork::create([
        //     'title' => 'bocah lucu',
        //     'slug' => 'bocah-lucu',
        //     'user_id' => 1,
        //     'category_id' => 2,
        //     'image' => 'bocah.jpg',
        //     'material' => 'semen',
        //     'size' => '150 cm',
        //     'year' => '2019',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu tincidunt odio. Morbi vel consectetur tellus. Suspendisse aliquet facilisis dolor, at finibus purus condimentum sit amet. Integer dapibus, libero vitae sollicitudin convallis, tortor metus vestibulum ligula, eget condimentum dolor purus in ligula. Cras faucibus magna vel metus tempor, vitae ultricies lectus interdum. Sed pellentesque aliquam ipsum, non tempor lectus interdum vel. Suspendisse ac placerat mauris. Vivamus pulvinar ligula vel magna accumsan lobortis. Morbi eu dolor et est venenatis tempor vitae non est. Nunc lobortis nunc ut sem faucibus aliquet. Curabitur eget nisl et erat interdum vulputate. Ut ut aliquet massa.',
        //     'status_id' => 2,
        // ]);


        // seeder Article

        // Article::create([
        //     'title' => 'cara memilih kanvas yang bagus untuk lukisan',
        //     'slug' => 'cara-memilih-kanvas-yang-bagus-untuk-lukisan',
        //     'image' => 'kanvas.jpg',
        //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu tincidunt odio. Morbi vel consectetur tellus. Suspendisse aliquet facilisis dolor, at finibus purus condimentum sit amet. Integer dapibus, libero vitae sollicitudin convallis, tortor metus vestibulum ligula, eget condimentum dolor purus in ligula. Cras faucibus magna vel metus tempor, vitae ultricies lectus interdum. Sed pellentesque aliquam ipsum, non tempor lectus interdum vel. Suspendisse ac placerat mauris. Vivamus pulvinar ligula vel magna accumsan lobortis. Morbi eu dolor et est venenatis tempor vitae non est. Nunc lobortis nunc ut sem faucibus aliquet. Curabitur eget nisl et erat interdum vulputate. Ut ut aliquet massa.',
        // ]);

        //seeder order

        // Order::create([
        //     'user_id' => 2,
        //     'order_name' => 'pesan patung kuda lari berbahan semen',
        //     'category_id' => 2,
        //     'image' => 'contohpersawahan.jpg',
        //     'description' => 'Lorem ipsum dolor sit ',
        //     'information_id' => 1,
        //     'note' => 'pesanan telah diterima, akan dihubungi melalui wa',
        // ]);

        // Order::create([
        //     'user_id' => 2,
        //     'order_name' => 'pesan lukisan persawahan',
        //     'category_id' => 2,
        //     'image' => 'contohpersawahan.jpg',
        //     'description' => 'Lorem ipsum dolor sit ',
        //     'information_id' => 2,
        //     'note' => 'pesanan ditolak karena gambar kurang jelas',
        // ]);

    }
}
