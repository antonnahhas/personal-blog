<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;

Route::get('contact', [PagesController::class, 'getContact']);
Route::get('about', [PagesController::class, 'getAbout']);
Route::get('/', [PagesController::class, 'getIndex']);
Route::resource('posts', PostController::class);
