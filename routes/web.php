<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function(){
//     return view('welcome');
// });
Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::delete('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'doLogin'])->name('auth.dologin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});  

Route::get('/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');

//modifier un produit
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/update/{id}', [ProductController::class,'update'])->name('product.update');

//supprimer un produit
Route::post('/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');



require __DIR__.'/auth.php';