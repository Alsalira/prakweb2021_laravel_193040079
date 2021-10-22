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
        User::factory(5)->create();

        // User::create([
        //     'name' => 'Alsa Lira',
        //     'email' => 'alsalira@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Dhiya Ulhaq',
        //     'email' => 'dhiyaulhaq@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug'=> 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, optio, corporis sit itaque, provident praesentium laudantium repudiandae temporibus maxime autem animi. Similique alias cum error totam, corrupti quidem sequi ea doloremque a cupiditate harum voluptas commodi minima sapiente velit incidunt officiis nam.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quis quam nam molestias aspernatur accusamus aperiam ad, doloribus ea quos laboriosam autem soluta eius vel inventore magnam quibusdam illum facilis similique adipisci ex ipsam pariatur. Voluptas at nam officia error quo eos iure, perspiciatis facere officiis dolorum porro quaerat dolores sunt, cupiditate, itaque maiores consequatur illum dolore laborum voluptates id delectus. Laborum tenetur ipsum numquam eum, obcaecati et alias assumenda quisquam perspiciatis maxime placeat facilis animi recusandae accusantium minus non perferendis dolorum quo neque esse.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug'=> 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, optio, corporis sit itaque, provident praesentium laudantium repudiandae temporibus maxime autem animi. Similique alias cum error totam, corrupti quidem sequi ea doloremque a cupiditate harum voluptas commodi minima sapiente velit incidunt officiis nam.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quis quam nam molestias aspernatur accusamus aperiam ad, doloribus ea quos laboriosam autem soluta eius vel inventore magnam quibusdam illum facilis similique adipisci ex ipsam pariatur. Voluptas at nam officia error quo eos iure, perspiciatis facere officiis dolorum porro quaerat dolores sunt, cupiditate, itaque maiores consequatur illum dolore laborum voluptates id delectus. Laborum tenetur ipsum numquam eum, obcaecati et alias assumenda quisquam perspiciatis maxime placeat facilis animi recusandae accusantium minus non perferendis dolorum quo neque esse.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug'=> 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, optio, corporis sit itaque, provident praesentium laudantium repudiandae temporibus maxime autem animi. Similique alias cum error totam, corrupti quidem sequi ea doloremque a cupiditate harum voluptas commodi minima sapiente velit incidunt officiis nam.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quis quam nam molestias aspernatur accusamus aperiam ad, doloribus ea quos laboriosam autem soluta eius vel inventore magnam quibusdam illum facilis similique adipisci ex ipsam pariatur. Voluptas at nam officia error quo eos iure, perspiciatis facere officiis dolorum porro quaerat dolores sunt, cupiditate, itaque maiores consequatur illum dolore laborum voluptates id delectus. Laborum tenetur ipsum numquam eum, obcaecati et alias assumenda quisquam perspiciatis maxime placeat facilis animi recusandae accusantium minus non perferendis dolorum quo neque esse.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug'=> 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, optio, corporis sit itaque, provident praesentium laudantium repudiandae temporibus maxime autem animi. Similique alias cum error totam, corrupti quidem sequi ea doloremque a cupiditate harum voluptas commodi minima sapiente velit incidunt officiis nam.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quis quam nam molestias aspernatur accusamus aperiam ad, doloribus ea quos laboriosam autem soluta eius vel inventore magnam quibusdam illum facilis similique adipisci ex ipsam pariatur. Voluptas at nam officia error quo eos iure, perspiciatis facere officiis dolorum porro quaerat dolores sunt, cupiditate, itaque maiores consequatur illum dolore laborum voluptates id delectus. Laborum tenetur ipsum numquam eum, obcaecati et alias assumenda quisquam perspiciatis maxime placeat facilis animi recusandae accusantium minus non perferendis dolorum quo neque esse.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
