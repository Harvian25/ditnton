<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TvController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\WelcomeController;



Route::get('/', function () {
    return view('welcome');
    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
    Route::get('/movie', [MovieController::class, 'index'])->name('movie.index');
    Route::get('/movie/{id}', [WelcomeController::class, 'detail'])->name('movie.detail');
    Route::put('/movie/{id}', [MovieController::class, 'addToFavorite'])
        ->name('movie.favorite');
    Route::get('/genre/{id}', [WelcomeController::class, 'genre'])->name('genre');

    Route::get('/televisi', [TvController::class, 'index'])->name('tv.index');

    // Authentication
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Socialite
    Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login');
    Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])
        ->name('user.google.callback');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
