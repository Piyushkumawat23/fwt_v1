<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
    });
Route::get('/contact', function () {
    return view('frontend.contact');
    });

Route::get('/objectives', function () {
    return view('frontend.objectives');
    });

Route::get('/project', function () {
    return view('frontend.project');
    });

Route::get('/project_details', function () {
    return view('frontend.project_details');
    });
