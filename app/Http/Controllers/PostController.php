<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post', [
            'title' => "Posts",
            'posts' => Post::all(),
        ]);
    }
    public function show($slug)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => Post::find($slug),
        ]);
    }

}
