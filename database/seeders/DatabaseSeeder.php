<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Post::factory(20)->create();
        
        // User::create([
        //     'name' => 'Alif Akbar',
        //     'email' => 'mralifakbar@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // User::create([
        //     'name' => 'Jamal Akhyer',
        //     'email' => 'jamalakhyer@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Ut eu fugiat dolore in elit cupidatat labore pariatur dolore eiusmod cillum occaecat elit elit. Eiusmod cupidatat adipisicing aliqua laboris laborum laboris veniam ut sunt velit occaecat occaecat.',
        //     'body' => 'Ut eu fugiat dolore in elit cupidatat labore pariatur dolore eiusmod cillum occaecat elit elit. Eiusmod cupidatat adipisicing aliqua laboris laborum laboris veniam ut sunt velit occaecat occaecat. Et sint occaecat excepteur dolor reprehenderit velit eu nisi eiusmod aliquip ut ipsum non. Enim commodo dolore deserunt ullamco mollit aliquip voluptate nostrud culpa adipisicing est. Occaecat ut duis et veniam.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Ut eu fugiat dolore in elit cupidatat labore pariatur dolore eiusmod cillum occaecat elit elit. Eiusmod cupidatat adipisicing aliqua laboris laborum laboris veniam ut sunt velit occaecat occaecat.',
        //     'body' => 'Ut eu fugiat dolore in elit cupidatat labore pariatur dolore eiusmod cillum occaecat elit elit. Eiusmod cupidatat adipisicing aliqua laboris laborum laboris veniam ut sunt velit occaecat occaecat. Et sint occaecat excepteur dolor reprehenderit velit eu nisi eiusmod aliquip ut ipsum non. Enim commodo dolore deserunt ullamco mollit aliquip voluptate nostrud culpa adipisicing est. Occaecat ut duis et veniam.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Ut eu fugiat dolore in elit cupidatat labore pariatur dolore eiusmod cillum occaecat elit elit. Eiusmod cupidatat adipisicing aliqua laboris laborum laboris veniam ut sunt velit occaecat occaecat.',
        //     'body' => 'Ut eu fugiat dolore in elit cupidatat labore pariatur dolore eiusmod cillum occaecat elit elit. Eiusmod cupidatat adipisicing aliqua laboris laborum laboris veniam ut sunt velit occaecat occaecat. Et sint occaecat excepteur dolor reprehenderit velit eu nisi eiusmod aliquip ut ipsum non. Enim commodo dolore deserunt ullamco mollit aliquip voluptate nostrud culpa adipisicing est. Occaecat ut duis et veniam.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Ut eu fugiat dolore in elit cupidatat labore pariatur dolore eiusmod cillum occaecat elit elit. Eiusmod cupidatat adipisicing aliqua laboris laborum laboris veniam ut sunt velit occaecat occaecat.',
        //     'body' => 'Ut eu fugiat dolore in elit cupidatat labore pariatur dolore eiusmod cillum occaecat elit elit. Eiusmod cupidatat adipisicing aliqua laboris laborum laboris veniam ut sunt velit occaecat occaecat. Et sint occaecat excepteur dolor reprehenderit velit eu nisi eiusmod aliquip ut ipsum non. Enim commodo dolore deserunt ullamco mollit aliquip voluptate nostrud culpa adipisicing est. Occaecat ut duis et veniam.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
        
    }
}