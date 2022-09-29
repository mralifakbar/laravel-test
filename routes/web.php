<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
// use App\Models\Post;

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
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => 'Home',
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Alif Akbar",
        "active" => "about",
        "email" => "mralifakbar@gmail.com",
        "image" => "man.jpg",
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => "Post Categories",
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('blog', [
        'title' => "Post by Category : $category->name",
        'active' => '',
        'posts' => $category->posts->load('category', 'user'),
    ]);
});

Route::get('/author/{user:username}', function(User $user) {
    return view('blog', [
        'title' => "Post by Author :  $user->name",
        'active' => '',
        'posts' => $user->posts->load('category', 'user'),
    ]);
});