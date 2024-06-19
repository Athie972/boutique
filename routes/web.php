<?php

use App\Http\Controllers\ProductController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;


// afficher les produits
Route::get('/', [ProductController::class, 'index'])->name('product.index');

// créer un nouveau produit
Route::post('/products', [ProductController::class, 'store'])->name('product.store');

//modifier un produit
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/update/{id}', [ProductController::class,'update'])->name('product.update');

//supprimer un produit
Route::post('/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
