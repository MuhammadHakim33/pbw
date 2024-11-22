<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', Controllers\HomeController::class);
Route::get('/about', [Controllers\AboutController::class, 'index']);
Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/gallery', [Controllers\GalleryController::class, 'index']);

Route::resource('users', Controllers\UserController::class)->middleware('auth');

Route::get('/login', [Controllers\LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('/login', [Controllers\LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', Controllers\LogoutController::class)->name('logout')->middleware('auth');
