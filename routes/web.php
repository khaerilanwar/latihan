<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        'title' => 'Home',
        'active' => 'home'
    ];
    return view('home', $data);
});

Route::get('/about', function () {
    $data = [
        'title' => 'About',
        'active' => 'about'
    ];
    return view('about', $data);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    $data = [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ];
    return view('categories', $data);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    $data = [
        'title' => "Post By: $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author'),
        'name' => $category->name
    ];
    return view('posts', $data);
});
Route::get('/authors/{author:username}', function (User $author) {
    $data = [
        'title' => "Post By: $author->name",
        'posts' => $author->posts->load('category', 'author')
    ];
    return view('posts', $data);
});
