<?php

use App\Models\Tag;
use App\Models\Problem;
use App\Models\Solution;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SolutionController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/dashboard')->middleware(['auth'])->group(function() {
    Route::get('/', function () {
        return view('admin.index')->with([
            'problem'  => Problem::where('user_id', Auth::id())->get(),
            'solution' => Solution::where('user_id', Auth::id())->get(),
        ]);
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

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/problems', [FrontendController::class, 'problem'])->name('frontend.problem');
Route::get('/single/{id}', [FrontendController::class, 'single'])->name('frontend.single');
Route::get('/query', [FrontendController::class, 'query'])->name('frontend.query');

require __DIR__.'/auth.php';
