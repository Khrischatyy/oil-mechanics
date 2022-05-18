<?php

use App\Http\Controllers\SystemController;
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

Route::get('/', [SystemController::class, 'index']);
Route::get('/products/{id}', [SystemController::class, 'childs'])->name('childs');
Route::get('/product/{id}', [SystemController::class, 'system'])->name('system');

Route::get('/addProduct', [SystemController::class, 'addProductPage'])->name('addProductPage');
Route::post('/addProduct', [SystemController::class, 'addProduct'])->name('addProduct');
