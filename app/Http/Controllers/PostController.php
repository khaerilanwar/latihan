<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Posts",
            // 'posts' => Post: 
        ];
        return view('posts', $data);
    }
}
