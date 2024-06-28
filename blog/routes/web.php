<?php

use Illuminate\Support\Facades\Route;

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('welcome');
});
