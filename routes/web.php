<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/posts/create', function () {
    return view('form');
})->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/index', [PostController::class, 'index'])->name('posts.index');


//Route::get('/example', [HomeController::class, 'index']);
//
//Route::get('/user/list', [UserController::class, 'index']);
//
//Route::resource('posts', PostController::class);

//Route::get('/posts/create', [PostController::class, 'create']);

//Route::post('/posts/store', [PostController::class, 'store']);
