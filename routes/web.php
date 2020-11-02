<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('front_end.home.index');
});

// Route::get('/', function () {
//     return view('nha');
// });

// Route::get('/', function () {
//     return view('front_end.product.show');
// });

// Route::get('/', function () {
//     return view('front_end.cart.index');
// });


Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('front_end.home.index');
})->name('home');

Route::post('/logout', [HomeController::class, 'userLogout'])->name('home.logout');


Route::get('/search', 'HomeController@search')->name('search');
