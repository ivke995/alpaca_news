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

\Illuminate\Support\Facades\Auth::routes();

Route::get('/', [\App\Http\Controllers\ScraperController::class, 'index'])->name('index');

Route::get('/show/{slug}', [\App\Http\Controllers\ScraperController::class, 'show'])->name('show');

Route::get('/category/{id}', [\App\Http\Controllers\ScraperController::class, 'category'])->name('category');

Route::get('/search', [\App\Http\Controllers\SearchController::class, 'search'])->name('search');

Route::get('/source/{id}', [\App\Http\Controllers\ScraperController::class, 'source'])->name('source');

//Route::get('')

//Route::controller(\App\Http\Controllers\AuthController::class)->group(function() {
//    Route::get('login', 'index')->name('login');
//
//    Route::get('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
//
//    Route::get('logout', 'logout')->name('logout');
//
//    Route::post('store', 'store')->name('store');

//    Route::get('login-check', 'login_check')->name('login_check');
//});
