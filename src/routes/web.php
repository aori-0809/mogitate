<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/products', [ProductController::class,'index'])->name('posts.index');
// Route::get('/products/search',[ProductController::class,'find'])->name('posts.find');
// Route::post('products/detail/{:productId}',[ProductController::class,'show'])->name('posts.show');
// Route::post('products/register',[ProductsController::class,'store'])->name('posts.store');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/find', [ProductController::class, 'find'])->name('products.find');
Route::get('/products/register', [ProductController::class, 'create'])->name('products.register'); // 登録フォーム用
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
