<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts/create', [PostController::class, 'store']);

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

Route::get('/posts/{post}/{category}', [PostController::class, 'showByCategory']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::patch('/posts/{post}', [PostController::class, 'update']);

Route::delete('/posts/{post}', [PostController::class, 'destroy']);

Route::get('prueba', function () {

    $post = Post::find(2);

    return $post;
});



