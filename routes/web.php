<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

// use for product 
Route::get('product', [ProductController::class, 'index'])->name('product-index');
Route::get('product/new', [ProductController::class, 'create'])->name('product-new');
Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product-edit');
Route::get('product/show/{id}', [ProductController::class, 'show'])->name('product-show');
Route::post('product/store', [ProductController::class, 'store'])->name('product-store');

Route::delete('product/delete/{id}', [ProductController::class, 'destroy'])->name('product-delete');
Route::get('product/update/{id}', [ProductController::class, 'update'])->name('product-update');
