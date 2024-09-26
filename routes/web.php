<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', [HomeController::class, 'index']);

Route::get('/user/list', [UserController::class, 'index']);
