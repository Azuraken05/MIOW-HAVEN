<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
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

/**
 * Functions 
 */
//authentication
Route::post('/login', [AuthenticationController::class, 'login'])->name("login")->middleware("web");
Route::delete('/logout', [AuthenticationController::class, 'logout'])->name("logout");

//images
Route::post('/image', [ImageController::class, 'createImage']);
Route::delete('/image/{imageId}', [ImageController::class, 'deleteImage']);
Route::get('/image/{imageId}', [ImageController::class, 'getImage']);
Route::get('/images', [ImageController::class, 'getImages']);
Route::get('/user/{userId}/images', [ImageController::class, 'getUserImages']);
Route::put('/image/{imageId}', [ImageController::class, 'updateImage']);
Route::delete('/image/{imageId}', [ImageController::class, 'deleteImage']);
Route::get('/image/{imageId}/download', [ImageController::class, 'downloadImage']);

//Lesson
Route::post('/lesson', [LessonController::class, 'createLesson']);
Route::get('/lesson/{lessonId}', [LessonController::class, 'getLesson']);
Route::get('/lessons', [LessonController::class, 'getLessons']);
Route::get('/lessons/video', [LessonController::class, 'getVideoLessons']);
Route::get('/lessons/module', [LessonController::class, 'getModuleLessons']);
Route::get('/user/{userId}/lessons/owned', [LessonController::class, 'getUserOwnedLessons']);
Route::get('/user/{userId}/lessons/videos', [LessonController::class, 'getUserVideoLessons']);
Route::get('/user/{userId}/lessons/modules', [LessonController::class, 'getUserModuleLessons']);
Route::get('/user/{userId}/lessons/created', [LessonController::class, 'getUserLessons']);
Route::put('/lesson/{lessonId}', [LessonController::class, 'updateLesson']);
Route::delete('/lesson/{lessonId}', [LessonController::class, 'deleteLesson']);
Route::post('/lesson/{lessonId}/user/{userId}', [LessonController::class, 'payLesson']);

//Report
Route::post('/report', [ReportController::class, 'createReport']);
Route::get('/report/{reportId}', [ReportController::class, 'getReport']);
Route::get('/user/{userId}/submissions', [ReportController::class, 'getUserSubmissions']);
Route::get('/reports', [ReportController::class, 'getReports']);
Route::get('/report/{reportId}', [ReportController::class, 'updateReport']);

//User
Route::get('/me', [UserController::class, 'getCurrentUser']);
Route::get('/user/{userId}', [UserController::class, 'getUser']);
Route::get('/users', [UserController::class, 'getUsers']);
Route::post('/register', [UserController::class, 'register'])->name("register");
Route::put('/user/{userId}', [UserController::class, 'update']);
Route::delete('/user/{userId}', [UserController::class, 'delete']);