<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    [PageController::class, 'index']
)->name('index');

Route::get(
    '/about',
    [PageController::class, 'about']
)->name('about');

Route::get(
    '/contact',
    [PageController::class, 'contact']
)->name('contact');

// Route::get(
//     '/posts',
//     [PageController::class, 'posts']
// );

// Route::get(
//     '/post/{id}',
//     [PageController::class, 'post']
// )->name('post');

Route::get(
    '/people/{id}',
    [PageController::class, 'people']
)->name('people');

Route::get('/user/{id}', [UserController::class, 'show']);







