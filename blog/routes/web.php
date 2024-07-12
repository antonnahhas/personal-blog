<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;

// Original Routes
Route::get('blog/{slug}', [BlogController::class, 'getSingle'])->name('blog.single')
    ->where('slug', '[\w\d\-\_]+');
Route::get('blog', [BlogController::class, 'getIndex'])->name('blog.index');
Route::get('contact', [PagesController::class, 'getContact']);
Route::post('contact', [PagesController::class, 'postContact']);
Route::get('about', [PagesController::class, 'getAbout']);
Route::get('/', [PagesController::class, 'getIndex']);

Route::post('comments/{post_id}', [CommentsController::class, 'store'])->name('comments.store');




// Breeze Routes TODO: could be deleted later
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class, ['except' => ['create']]);
    Route::resource('tags', TagController::class, ['except' => ['create']]);
    Route::get('comments/{id}/edit', [CommentsController::class, 'edit'])->name('comments.edit');
    Route::put('comments/{id}', [CommentsController::class, 'update'])->name('comments.update');
    Route::delete('comments/{id}', [CommentsController::class, 'destroy'])->name('comments.destroy');
    Route::get('comments/{id}/delete', [CommentsController::class, 'delete'])->name('comments.delete');
});

require __DIR__.'/auth.php';
