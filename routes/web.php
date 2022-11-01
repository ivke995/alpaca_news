<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\ScraperController::class, 'index'])->name('index');

Route::get('/show/{id}', [\App\Http\Controllers\ScraperController::class, 'show'])->name('show');

Route::get('/category/{id}', [\App\Http\Controllers\ScraperController::class, 'category'])->name('category');

