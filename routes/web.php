<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/about-us', [WelcomeController::class, 'about'])->name('about');


Route::get('/category', [CategoryController::class, 'category'])->name('category');



Route::prefix('admin')->as('admin.')->middleware(['auth', 'verified'])->group(function () {
   Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
   Route::get('/blogs', [DashboardController::class, 'blogs'])->name('blogs');
   Route::get('/add-blogs', [DashboardController::class, 'addBlog'])->name('add.blog');
   Route::get('/categories', [DashboardController::class, 'categories'])->name('categories');
   Route::get('/blog-details', [DashboardController::class, 'blogDetails'])->name('blog.details');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
