<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Alsa Lira",
        "email" => "liraalsaamalia@gmail.com",
        "image" => "alsa.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alsa Lira",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi perspiciatis accusantium sequi nesciunt, ad ipsum delectus ipsa nisi suscipit minima. Neque, quae voluptates libero quod sapiente soluta! Laboriosam esse odio excepturi eveniet sint quae inventore ipsam delectus incidunt pariatur totam nam facilis perferendis neque doloremque, unde nihil id aut nemo error obcaecati earum corrupti! Est animi veritatis, eum, beatae, ad aspernatur commodi perspiciatis doloremque magni dolor quia asperiores iusto necessitatibus temporibus. Harum illo nobis ipsa quas labore eos. Voluptatum, sunt?"
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Putri Arianti",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque odio impedit obcaecati, libero laborum, deleniti qui exercitationem eius, voluptates tenetur quod ullam ipsum assumenda molestiae expedita doloremque sapiente perferendis maxime cum at! Veniam praesentium, saepe quidem eaque accusamus tenetur expedita facere exercitationem laborum cumque facilis minima consectetur hic, aut unde reiciendis maxime sint. Consequatur, nobis minus quibusdam sit numquam eius ex omnis, aliquid ipsa quam sint in distinctio vel vitae assumenda libero adipisci aspernatur veniam. Unde ad enim rerum dolorem, temporibus natus amet, ab obcaecati facere eum nesciunt quo doloribus libero illum nihil explicabo deleniti praesentium harum id iste?"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single routes
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alsa Lira",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi perspiciatis accusantium sequi nesciunt, ad ipsum delectus ipsa nisi suscipit minima. Neque, quae voluptates libero quod sapiente soluta! Laboriosam esse odio excepturi eveniet sint quae inventore ipsam delectus incidunt pariatur totam nam facilis perferendis neque doloremque, unde nihil id aut nemo error obcaecati earum corrupti! Est animi veritatis, eum, beatae, ad aspernatur commodi perspiciatis doloremque magni dolor quia asperiores iusto necessitatibus temporibus. Harum illo nobis ipsa quas labore eos. Voluptatum, sunt?"
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Putri Arianti",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque odio impedit obcaecati, libero laborum, deleniti qui exercitationem eius, voluptates tenetur quod ullam ipsum assumenda molestiae expedita doloremque sapiente perferendis maxime cum at! Veniam praesentium, saepe quidem eaque accusamus tenetur expedita facere exercitationem laborum cumque facilis minima consectetur hic, aut unde reiciendis maxime sint. Consequatur, nobis minus quibusdam sit numquam eius ex omnis, aliquid ipsa quam sint in distinctio vel vitae assumenda libero adipisci aspernatur veniam. Unde ad enim rerum dolorem, temporibus natus amet, ab obcaecati facere eum nesciunt quo doloribus libero illum nihil explicabo deleniti praesentium harum id iste?"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});