<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\HomePageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// route index
// index home page
Route::get('/', [HomePageController::class, 'homelanding']);

Route::group(['prefix' => 'app'], function () {
    Route::get('homepage', [HomePageController::class, 'homepage'])->name('homepage.homepage');

    // auth
    Route::get('logindokter', [HomePageController::class, 'logindokter'])->name('auth.logindokter');
    Route::get('registrasipasien', [HomePageController::class, 'registrasipasien'])->name('auth.registrasipasien');

    // detail template
    Route::get('allorder', [HomePageController::class, 'allorder'])->name('homepage.allorder');
});