<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SocialController;
use App\Repositories\Eloquents\CartRepository;
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

Route::group(['middleware' => 'localization'], function() {        
    Route::get('/change_language/{language}', [HomeController::class, 'changeLanguage'])->name('change_language');

    Route::get('/', [HomeController::class, 'index'])->name('home');

    /**********************Auth*************************************/
    // Route::middleware(['auth:sanctum', 'verified'])
    // ->get('/home', [HomeController::class, 'index'])->name('home.login');
    Route::get('/home', [HomeController::class, 'index']);


    Route::post('/logout', [HomeController::class, 'logout'])->name('home.logout');


    /***********************Cart*****************************/
    Route::prefix('cart')->group(function() {
        Route::get('/', [CartController::class, 'index'])->name('cart');
        Route::post('/add', [CartController::class, 'addToCart'])->name('cart.add');
        Route::delete('/delete/{bookId}', [CartController::class, 'deleteOnCart'])->name('cart.delete');
        Route::put('/update', [CartController::class, 'updateOnCart'])->name('cart.update');
        Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    });

    Route::get('login/{provider}', [SocialController::class, 'redirect'])->name('oauth');
    Route::get('login/{provider}/callback', [SocialController::class, 'callback']);
    



    /***********************Home*****************************/
    Route::get('/category/{id}', [HomeController::class, 'getBookOfCategory'])->name('category');
    Route::get('/search', [HomeController::class, 'searchBook'])->name('home.search');



    /*************************Book****************************/
    Route::prefix('book')->group(function() {
        Route::get('/', [BookController::class, 'showAllBook'])->name('listBook');
        Route::get('/detail/{id}', [BookController::class, 'getBookById'])->name('detailBook');
    });

    Route::post('/review', [CommentController::class, 'store'])->name('comment.store');

    /*************************Order****************************/
    Route::get('/order', [OrderController::class, 'index'])->name('order');
});








