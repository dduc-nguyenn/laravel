<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/',                 [HomeController::class, 'index']);
Route::get('/posts',            [HomeController::class, 'posts'])->name('posts');
Route::get('/post_detail/{id}', [HomeController::class, 'post_detail'])->name('post_detail');
Route::get('/category/{id}',    [HomeController::class, 'category'])->name('category');
Route::get('/search_post',      [HomeController::class, 'search_post'])->name('search_post');