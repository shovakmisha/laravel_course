<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

// GRUD
Route::prefix('admin')->group(function (){
    Route::get('posts', [PostController::class, 'index'])->name('admin.posts');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('admin.post.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('posts', [PostController::class, 'update'])->name('admin.post.update');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('admin.post.delete');
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('admin.post.like');
});
