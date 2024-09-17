<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});
Route::get('/service-details', function () {
    return view('service-details');
});
Route::get('/starter-page', function () {
    return view('starter-page');
});
