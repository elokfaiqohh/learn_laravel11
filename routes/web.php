<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact', ['instagram' => 'ee_lok', 'linkedin' => 'elokfaiqohh', 'github' => 'elokfaiqohh']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Elok Faiqoh', 'umur' => '20', 'alamat' => 'bondowoso']);
});
