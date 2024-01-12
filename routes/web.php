<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrasiController;
use App\Models\Category;
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

Route::get('/dashboard', function () {
    $data = [
        'title' => 'My Dashboard',
        'active' => 'dashboard'
    ];
    return view('dashboard.index', $data);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication']);
Route::get('/register', [RegistrasiController::class, 'index'])->middleware('guest');
Route::post('/register', [RegistrasiController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
