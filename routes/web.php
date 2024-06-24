<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('product.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProductController::class, 'edit'])->name('product.edit');
    Route::patch('/profile', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/profile', [ProductController::class, 'destroy'])->name('product.destroy');
});

require __DIR__.'/auth.php';
