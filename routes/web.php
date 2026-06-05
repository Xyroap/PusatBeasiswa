<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminApplicationController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [ArticleController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/article/{article}', [ArticleController::class, 'show'])
    ->middleware(['auth'])
    ->name('article.show');

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/dashboard', [
            AdminApplicationController::class,
            'dashboard'
        ])->name('admin.dashboard');

        Route::get('/applications', [
            AdminApplicationController::class,
            'index'
        ]);

        Route::get('/applications/{application}', [
            AdminApplicationController::class,
            'show'
        ]);

        Route::post(
            '/applications/{application}/approve',
            [AdminApplicationController::class, 'approve']
        )->name('admin.applications.approve');

        Route::post(
            '/applications/{application}/reject',
            [AdminApplicationController::class, 'reject']
        )->name('admin.applications.reject');

        Route::patch('/applications/{application}/status', [
            AdminApplicationController::class,
            'updateStatus'
        ]);
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::view('/community', 'community')->name('community');
    Route::get('/workshop', [WorkshopController::class, 'index'])
    ->name('workshop');
    Route::get('/workshop/{workshop}', [WorkshopController::class, 'show'])
    ->name('workshop.show');
    Route::get('/scholarship', [ScholarshipController::class, 'index'])
    ->name('scholarship');
    Route::get('/scholarship/{scholarship}/apply', [ApplicationController::class, 'create'])
    ->name('application.create');
    Route::post('/scholarship/{scholarship}/apply', [ApplicationController::class, 'store'])
    ->name('application.store');
    Route::get('/application/success', function () {
    return view('application-success');
    })->name('application.success');
    Route::get('/applications', [ApplicationController::class, 'index'])
    ->name('applications.index');
    Route::get('/applications/{application}', [ApplicationController::class, 'show'])
    ->name('applications.show');
    Route::get('/scholarship/{scholarship}', [ScholarshipController::class, 'show'])
    ->name('scholarship.show');
    Route::get('/articles', [ArticleController::class, 'index'])
    ->name('articles');
});

require __DIR__.'/auth.php';

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');