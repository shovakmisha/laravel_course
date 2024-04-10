<?php

use App\Http\Controllers\User\PostController;
use Illuminate\Support\Facades\Route;

// GRUD
Route::prefix('user')->as('user.')->group(function (){ // Відтепер ці роути будуть мати префікс - user. Наприклад - user/posts
    Route::redirect('/', '/user/posts')->name('user');
    Route::get('posts', [PostController::class, 'index'])->name('posts'); // Також імя роута тепер буде - user.posts
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('post.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts', [PostController::class, 'update'])->name('post.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('post.delete');
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('post.like');
});
