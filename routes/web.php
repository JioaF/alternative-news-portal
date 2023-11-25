<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KompasController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

// kompas news route
Route::get('/news/kompas', [KompasController::class, 'index']);
Route::get('/news/kompas/read', [KompasController::class, 'read']);
