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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){ return view('pages.home'); });
Route::get('/about', function(){ return view('pages.about'); });
Route::get('/contact', function(){ return view('pages.contact'); });
Route::get('/product', function(){ return view('pages.product'); });


Route::get('/api/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/store/products', [ProductController::class, 'store'])->name('store.products');
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
Route::put('/products/{product}', [ProductController::class, 'update']);
