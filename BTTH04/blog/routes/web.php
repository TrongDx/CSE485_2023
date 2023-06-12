<?php

use App\Http\Controllers\MyPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
    return view('posts.home');
});

Route::resource('posts', PostController::class);

Route::get('myPosts', [MyPostController::class, 'getAllPost'])->name('posts.all');

Route::get('myPosts/{id}', [MyPostController::class, 'getPostById'])->name('posts.getById');

Route::put('myPosts/{id}', [MyPostController::class, 'update']);