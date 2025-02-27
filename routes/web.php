<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LanguagesController;

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/products', [ProductsController::class,'index'])->name('products');

Route::get('lang/{lang}', [LanguageController::class, 'switch'])->name('lang.switch');

Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::get('/register', function () {
    abort(404);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // categories
    Route::resource('category', CategoryController::class)->except(['destroy', 'show']);
    Route::get('category/delete/{id}', [CategoryController::class , 'delete'])->name('category.delete');

    // Products
    Route::resource('product', ProductController::class)->except(['destroy', 'show']);
    Route::get('product/delete/{id}', [ProductController::class , 'delete'])->name('product.delete');
});

require __DIR__.'/auth.php';
