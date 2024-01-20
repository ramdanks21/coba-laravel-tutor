<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home', [
        'title' => 'Halaman Home',
    ]);
});

// passing data ke route parameter
Route::get('/about', function () {
    return view('about', [
        'nama' => 'Ramdan Kusumahdinata',
        'title' => 'Halaman About',
        'email' => 'ramdankusumah@gmail.com',
        'image' => 'https://images.unsplash.com/photo-1682685797741-f0213d24418c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxMXx8fGVufDB8fHx8fA%3D%3D',

    ]);
});

// singgle post
Route::get('/posts/{slug}', function ($slug) {
    $posts =
        [

        [
            'title' => 'Judul Post Ke-1',
            'slug' => 'judul-posts-1',
            'author' => 'Ramdan Kusumah',
            'body' => ' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus minima dolor at. Facere dolores eius sapiente quae, explicabo, rem ex accusantium dolore, dolor perferendis harum voluptas labore beatae eligendi culpaLorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus minima dolor at. Facere dolores eius sapiente quae, explicabo, rem ex accusantium dolore, dolor perferendis harum voluptas labore beatae eligendi culpa',

        ],

        [
            'title' => 'Judul Post Ke-2',
            'slug' => 'judul-posts-2',

            'author' => 'Kang Ramdan',
            'body' => ' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus minima dolor at. Facere dolores eius sapiente quae, explicabo, rem ex accusantium dolore, dolor perferendis harum voluptas labore beatae eligendi culpaLorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus minima dolor at. Facere dolores eius sapiente quae, explicabo, rem ex accusantium dolore, dolor perferendis harum voluptas labore beatae eligendi culpa',

        ],
    ];
    return view('post', [
        'title' => 'Single Post',
        'posts' => $posts,
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Posts',
        'posts' => Post::all(),
    ]);
});
