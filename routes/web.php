<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['nama' => 'Mekikun :D']);
});


Route::get('/about', function () {
    return view('about', ['nama' => 'Baji Ajalah']);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact', ['instagram' => 'https://instagram.com/_bajif', 'github' => 'https://github.com/bajiff/_bajiff']);
});
