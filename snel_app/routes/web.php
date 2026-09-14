<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderRowController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/prices', [PriceController::class, 'index'])->name('prices.index');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orderrows', [OrderRowController::class, 'index'])->name('orderrows.index');
