<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;

Route::get('blog/{slug}', [BlogController::class, 'getSingle'])->name('blog.single')
    ->where('slug', '[\w\d\-\_]+');
Route::get('blog', [BlogController::class, 'getIndex'])->name('blog.index');
Route::get('contact', [PagesController::class, 'getContact']);
Route::get('about', [PagesController::class, 'getAbout']);
Route::get('/', [PagesController::class, 'getIndex']);
Route::resource('posts', PostController::class);
