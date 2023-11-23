<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;
use App\Http\Controllers\newcontactsController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* Route::get('/products', [productsController::class, 'index'])->name('products.index');
Route::get('/products/create', [productsController::class, 'create'])->name('products.create');
Route::post('/products/create', [productsController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [productsController::class, 'show'] )->name('products.show');
Route::get('/products/{product}/edit', [productsController::class, 'edit'] )->name('products.edit');
Route::patch('/products/{product}', [productsController::class, 'update'] )->name('products.update');
Route::delete('/products/{product}', [productsController::class, 'destroy'] )->name('products.destroy');
 */
Route::resource('/contact', newcontactsController::class);
Route::resource('/products', productsController::class);






Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');

