<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\productController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

 

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard',[dashboardController::class,'index'])->name('dashboard');

    // Category
    Route::get('/category',[categoryController::class,'index'])->name('category');
    Route::get('/category/create',[categoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[categoryController::class,'store'])->name('category.store');
    Route::get('/category/edit/{id}',[categoryController::class,'edit'])->name('category.edit');
    Route::put('/category/update/{id}',[categoryController::class,'update'])->name('category.update');
    Route::get('/category/delete/{id}',[categoryController::class,'destroy'])->name('category.delete');

    // Product
    Route::get('/product',[productController::class,'index'])->name('product');
    Route::get('/product/create',[productController::class,'create'])->name('product.create');
    Route::post('/product/store',[productController::class,'store'])->name('product.store');
    Route::get('/product/edit/{id}',[productController::class,'edit'])->name('product.edit');
    Route::put('/product/update/{id}',[productController::class,'update'])->name('product.update');
    Route::get('/product/delete/{id}',[productController::class,'destroy'])->name('product.delete');
});

require __DIR__.'/auth.php';
