<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('Authentacation');
});

Route::get('/homepage', function () {
    return view('HomePage');
});

Route::get('/signup', function () {
    return view('SignUp');
});


Route::get('/homelesson', function () {
    return view('HomeLessons');
});

Route::get('/artgallery', function () {
    return view('ArtGallery');
});

Route::get('/profile', function () {
    return view('Profile');
});

Route::get('/artistpage', function () {
    return view('ArtistPage');
});
