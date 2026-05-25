<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


Route::get('/', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

// Route::get('/', function () {
//     return view('products.index');
// });
Route::get('/products/{id}/show', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}/update', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}/destroy', [UserController::class, 'destroy'])->name('users.destroy');