<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Authentacation');
});

Route::get('/homepage', function () {
    return view('HomePage');
});

Route::get('/signup', function () {
    return view('SignUp');
});

Route::get('/drawinglesson', function () {
    return view('SignUp');
});