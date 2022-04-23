<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/dashboard')->middleware(['auth'])->group(function() {
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');

    // Problem
    Route::resource('problem', ProblemController::class);
    // Solution
    Route::resource('solution', SolutionController::class);
    // Activity
    Route::resource('activity', ActivityController::class);
    // Category
    Route::resource('category', CategoryController::class);
    // Tag
    Route::resource('tag', TagController::class);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
