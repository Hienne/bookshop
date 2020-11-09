<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
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



/**********************Auth*************************************/
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/home', [HomeController::class, 'index'])->name('home.login');


Route::post('/logout', [LoginController::class, 'userLogout'])->name('home.logout');





/***********************Home*****************************/
Route::get('/book', [BookController::class, 'showAllBook'])->name('listBook');
Route::get('/category/{id}', [HomeController::class, 'getBookOfCategory'])->name('category');
// Route::get('/test', [HomeController::class, 'test']);
Route::get('/search', 'HomeController@search')->name('search');



/*************************Book****************************/
Route::get('/detailBook/{id}', [BookController::class, 'getBookById'])->name('detailBook');
// Route::get('/detailBook/{id}', [BookController::class, 'getBookById'])
//     ->middleware('auth')
//     ->name('detailBook');

// Route::get('/detailBook', function(){
//     return view('front_end.product.show');
// });


Route::post('/review', [CommentController::class, 'store'])->name('comment.store');

/*********************Login Google************************** */
Route::get('/redirect', [LoginController::class, 'redirectToProvider'])->name('loginWithGG');
Route::get('/callback', [LoginController::class, 'handleProviderCallback']);



