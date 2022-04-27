<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\TagController;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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
    //
    Route::post('ajax/tag/store', function (Request $request) {
        try {
            $tag = Tag::create([
                'name'    => $request->name,
                'slug'    => Str::slug($request->name),
                'user_id' => Auth::id(),
            ]);
            return response()->json(['tag'=>$tag,'success'=>'Tag Created']);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['error'=>$th->getMessage()]);
        }
    })->name('ajax.tag.store');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
