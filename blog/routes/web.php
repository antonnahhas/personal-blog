<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('contact', [PagesController::class, 'getContact']);

Route::get('about', [PagesController::class, 'getAbout']);

Route::get('/', [PagesController::class, 'getIndex']);
