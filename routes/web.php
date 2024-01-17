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
Route::get('/unauthorized', [AppController::class, 'unauthorized']);

Route::get('/', [AppController::class, 'home']);

Route::get('/add_task', [AppController::class, 'add_task'])->middleware('checkAccess');;
Route::post('/add_task_procces', [AppController::class, 'add_task_procces'])->name('processTask');
Route::get('/list_tasks', [AppController::class, 'list_tasks']);

Route::get('/register_user', [AppController::class, 'register_user']);
Route::post('/register_user_procces', [AppController::class, 'register_user_procces'])->name('userRegster');

Route::get('/login_user', [AppController::class, 'login_user']);
Route::post('/login_user_procces', [AppController::class, 'login_user_procces'])->name('userLogin');

Route::post('/logout', [AppController::class, 'logout'])->name('logout');