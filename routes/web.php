<?php

use App\Http\Controllers\AppController;
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
Route::get('/', [AppController::class, 'home']);

Route::get('/add_product', [AppController::class, 'add_product']);

Route::get('/list_products', [AppController::class, 'list_products']);

Route::get('/register_user', [AppController::class, 'register_user']);

Route::post('/add_product_procces', [AppController::class, 'add_product_procces'])->name('processForm');
