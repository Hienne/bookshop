<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/home', [HomeController::class, 'index'])->name('home.login');


Route::post('/logout', [LoginController::class, 'userLogout'])->name('home.logout');


Route::get('/search', 'HomeController@search')->name('search');


/***********************Book*****************************/
Route::get('/book', [BookController::class, 'showAllBook'])->name('books');
Route::get('/category/{id}', [HomeController::class, 'getBookOfCategory'])->name('category');


Route::get('/test', [HomeController::class, 'test']);


/*********************Login Google************************** */
Route::get('/redirect', [LoginController::class, 'redirectToProvider'])->name('loginWithGG');
Route::get('/callback', [LoginController::class, 'handleProviderCallback']);
