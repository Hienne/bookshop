<?php

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

Route::get('/', [HomeController::class, 'index']);


Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('front_end.home.index');
})->name('home');

Route::post('/logout', [HomeController::class, 'userLogout'])->name('home.logout');


Route::get('/search', 'HomeController@search')->name('search');


/*********************Login Google************************** */
Route::get('/redirect', [LoginController::class, 'redirectToProvider'])->name('loginWithGG');
Route::get('/callback', [LoginController::class, 'handleProviderCallback']);
