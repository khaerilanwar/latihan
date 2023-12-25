<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Posts",
            'posts' => Post::all()
        ];
        return view('posts', $data);
    }

    public function show(Post $post)
    {
        $data = [
            "title" => "Posts",
            "post" => $post
        ];

        return view('post', $data);
    }
}
