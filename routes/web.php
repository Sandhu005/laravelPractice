<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/register', function(){
    return view('auth.register');
});

Route::get('/', function(){
    return view('auth.login');
});

Route::resource('/category', CategoryController::class);

Route::get('/catergory/changeStatus/{id}/{status}', [CategoryController::class, 'changeStatus'])->name('categoryChangeStatus');

Route::resource('/product', ProductController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
