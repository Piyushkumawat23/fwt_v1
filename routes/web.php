<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/index');
});

Route::get('/about', function () {
    return view('frontend/about');
    });
Route::get('/contact', function () {
    return view('frontend/contact');
    });
