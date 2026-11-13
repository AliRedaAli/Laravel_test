<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return "<h1>Welcome to Laravel</h1>";
    return view('welcome');
});

Route::get('/posts', [PostsController::class, 'index'] );