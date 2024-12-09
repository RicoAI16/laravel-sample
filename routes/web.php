<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Redirect the root URL to /posts
Route::redirect('/', '/posts');

// Grouped routes for posts
Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::post('/', [PostController::class, 'store'])->name('store');
    Route::get('/{post}', [PostController::class, 'show'])->name('show');
    Route::get('/{post}/edit', [PostController::class, 'edit'])->name('edit');
    Route::put('/{post}', [PostController::class, 'update'])->name('update');
    Route::delete('/{post}', [PostController::class, 'destroy'])->name('destroy');
});
