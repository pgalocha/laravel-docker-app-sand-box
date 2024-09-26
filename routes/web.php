<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', [HomeController::class, 'index']);

Route::get('/user/list', [UserController::class, 'index']);

Route::resource('posts', PostController::class);

//Route::get('/posts/create', [PostController::class, 'create']);

//Route::post('/posts/store', [PostController::class, 'store']);
