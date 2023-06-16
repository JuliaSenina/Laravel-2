<?php

use Illuminate\Support\Facades\Route;
use Blog\App\Http\Controllers\TodoController;
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

/*Route::get('/todo', [\blog\app\Http\Controllers\TodoController::class, 'index']);
Route::get('/todo/create', [\blog\app\Http\Controllers\TodoController::class, 'create']);
Route::get('/todo/{id}', [\blog\app\Http\Controllers\TodoController::class, 'find']);*/

Route::get('/todo', [TodoController::class, 'index']);
Route::get('/todo/create', [TodoController::class, 'create']);
Route::get('/todo/{id}', [TodoController::class, 'find']);
