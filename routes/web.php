<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('index');
});

Route::get('/blogs', [BlogController::class, 'showBlogs']);

Route::get('/tambah', [BlogController::class, 'tambahBlog']);

Route::post('/tambah', [BlogController::class, 'createBlog']);
