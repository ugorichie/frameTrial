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
    return view('welcome');
});

//ALL PRODUCTS ROUTE
Route::get('product', [ProductController::class, 'index'])->name('product.index');
Route::any('product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('product/create-post', [ProductController::class, 'create_post'])->name('product/create-post');
Route::any('product/{id}/edit', [ProductController::class, 'fetchProduct'])->name('product/product-edit');
Route::any('product/{id}/edit', [ProductController::class, 'updateProduct'])->name('product/product.update');