<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [ArticleController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/article/{article}', [ArticleController::class, 'show'])
    ->middleware(['auth'])
    ->name('article.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::view('/community', 'community')->name('community');
    Route::view('/workshop', 'workshop')->name('workshop');
    Route::view('/scholarship', 'scholarship')->name('scholarship');
    Route::view('/articles', 'articles')->name('articles');
});

require __DIR__.'/auth.php';

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');