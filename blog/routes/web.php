<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Original Routes
Route::get('blog/{slug}', [BlogController::class, 'getSingle'])->name('blog.single')
    ->where('slug', '[\w\d\-\_]+');
Route::get('blog', [BlogController::class, 'getIndex'])->name('blog.index');
Route::get('contact', [PagesController::class, 'getContact']);
Route::get('about', [PagesController::class, 'getAbout']);
Route::get('/', [PagesController::class, 'getIndex']);

// Breeze Routes TODO: could be deleted later
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
});

require __DIR__.'/auth.php';
