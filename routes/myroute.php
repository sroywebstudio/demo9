<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\UserController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/post-category', [PostCategoryController::class, 'index'])->name('postcategory');
    Route::get('/post-category/show/{id}', [PostCategoryController::class, 'show'])->name('postcategory.show');
    Route::get('/post-category/create', [PostCategoryController::class, 'create'])->name('postcategory.create');
    Route::post('/post-category/store', [PostCategoryController::class, 'store'])->name('postcategory.store');
    Route::get('/post-category/edit/{id}', [PostCategoryController::class, 'edit'])->name('postcategory.edit');
    Route::put('/post-category/update/{id}', [PostCategoryController::class, 'update'])->name('postcategory.update');
    Route::delete('/post-category/delete/{id}', [PostCategoryController::class, 'delete'])->name('postcategory.delete');

    Route::resource('post', PostController::class);

    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

    Route::get('/all', [AdminController::class, 'index'])->name('all');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::post('/store', [AdminController::class, 'store'])->name('store');
});
