<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('c')) {
            $category = Category::firstWhere('slug', request('c'));
            $title = "in $category->name";
        } elseif (request('a')) {
            $author = User::firstWhere('username', request('a'));
            $title = "by $author->name";
        };
        $data = [
            "title" => "All Posts " . $title,
            'active' => 'posts',
            'posts' => Post::latest()->filter(request(['s', 'c', 'a']))->paginate(7)->withQueryString()
        ];
        return view('posts', $data);
    }

    public function show(Post $post)
    {
        $data = [
            "title" => "Posts",
            'active' => 'posts',
            "post" => $post
        ];

        return view('post', $data);
    }
}
