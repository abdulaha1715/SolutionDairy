<?php

use App\Http\Controllers\ProblemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/dashboard')->middleware(['auth'])->group(function() {
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::resource('problem', ProblemController::class);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
