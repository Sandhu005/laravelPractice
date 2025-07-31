<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;

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

Route::get('/index', function () {
    return view('index');
});

Route::resource('/category', CategoryController::class);

Route::get('/products', [ProductsController::class, 'home'])->name('products');

Route::get('/product/add', [ProductsController::class, 'add'])->name('addProduct');

Route::get('/product/edit', [ProductsController::class, 'edit'])->name('editProduct');


