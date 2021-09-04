<?php

use App\Http\Controllers\CompanieController;
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

Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');





// RUTAS DE EMPRESA
Route::get('companies', [CompanieController::class, 'index'])->name('companies.index');
Route::get('companies/create', [CompanieController::class, 'create'])->name('companies.create');
Route::get('companies/{id}', [CompanieController::class, 'show'])->name('companies.show');
Route::post('companies', [CompanieController::class, 'store'])->name('companies.store');
Route::get('companie/edit/{id}', [CompanieController::class, 'edit'])->name('companies.edit');
Route::delete('companies/{id}', [CompanieController::class, 'destroy'])->name('companies.destroy');
Route::put('companies/{id}', [CompanieController::class, 'update'])->name('companies.update');
