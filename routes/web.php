<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('products.produits');
});

Route::get('/', [ProductController::class, 'index'])->name('product.index');
