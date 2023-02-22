<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes f-
*/
Route::middleware('auth')->group(function () {
    Route::get('/posts/profiles/{user}', [UserProfileController::class, 'index']);
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::post('/posts/{comment_id}/comments/', [CommentsController::class, 'store']);
    Route::get('/posts/{post}/comments/', [CommentsController::class, 'index']);
    Route::get('/comments/{comment}', [CommentsController::class, 'destroy']);
    Route::get('/posts/', [PostController::class, 'index']);
    Route::get('/posts/create', [PostController::class, 'create']);
    Route::get('/tweet', [PostController::class, 'tweet']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/{post}', [PostController::class, 'show']);
    Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::post('/like/{postId}', [LikeController::class, 'store']);
    
    
});



    
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
