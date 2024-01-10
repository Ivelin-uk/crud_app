<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


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
Route::get('/', [ProductController::class, 'home']);

Route::get('/add_product', [ProductController::class, 'add_product']);

Route::get('/list_products', [ProductController::class, 'list_products']);

Route::get('/register_user', [ProductController::class, 'register_user']);

Route::post('/add_product_procces', [ProductController::class, 'add_product_procces'])->name('processForm');
