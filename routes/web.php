<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\FollowController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes f-
*/
Route::middleware('auth')->group(function () {
    Route::get('/profiles/{user}', [ProfileController::class, 'show']);
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::post('/posts/{comment_id}/comments/', [CommentsController::class, 'store']);
    Route::get('/posts/{post}/comments/', [CommentsController::class, 'index']);
    Route::get('/comments/{comment}', [CommentsController::class, 'destroy']);
    Route::get('/posts/', [PostController::class, 'index']);
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::get('/tweet', [PostController::class, 'tweet']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/{post}', [PostController::class, 'show']);
    Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::delete('/posts/{post}', [PostController::class, 'delete']);
    Route::post('/like/{postId}', [LikeController::class, 'store']);
    Route::get('/recruitments', [RecruitmentController::class, 'index'])->name('recruitments.index');
    Route::get('/recruitments/create', [RecruitmentController::class, 'create'])->name('recruitments.create');
    Route::get('/recruitments/search', [RecruitmentController::class, 'search'])->name('recruitments.search');
    Route::get('/recruitments/{recruitment}', [RecruitmentController::class, 'show']);
    Route::get('/recruitments/{recruitment}/edit', [RecruitmentController::class, 'edit']);
    Route::put('/recruitments/{recruitment}', [RecruitmentController::class, 'update']);
    Route::post('/recruitments/store', [RecruitmentController::class, 'store']);
    Route::delete('/recruitments/{recruitment}', [RecruitmentController::class, 'delete']);
    Route::post('/users/{user}/follow', [FollowController::class, 'store'])->name('follow');
    Route::delete('/users/{user}/unfollow', [FollowController::class, 'destroy'])->name('unfollow');
    
    
    
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
