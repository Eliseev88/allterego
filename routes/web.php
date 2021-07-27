<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\ProductController;

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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('category.show')
    ->where(['category' => '\d+']);
Route::get('/{category}/{product}', [ProductController::class, 'show'])->name('product.show')
    ->where(['category' => '\d+', 'product' => '\d+']);
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/interview', [MainController::class, 'interview'])->name('interview');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
