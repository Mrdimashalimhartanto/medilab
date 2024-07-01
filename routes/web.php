<?php

use App\Http\Controllers\Home\DetailPasienController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\HomePageController;
use App\Http\Controllers\Home\ReportController;
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
    Route::get('login-dokter', [HomePageController::class, 'logindokter'])->name('auth.logindokter');
    Route::get('registrasi-pasien', [HomePageController::class, 'registrasipasien'])->name('auth.registrasipasien');

    // detail template
    Route::get('all-order', [HomePageController::class, 'allorder'])->name('homepage.allorder');
    Route::get('register-pasienworkload', [HomePageController::class, 'registerpasienworkload'])->name('homepage.registerpasienworkload');
    Route::get('exam-room', [HomePageController::class, 'examroom'])->name('homepage.examroom');

    // Detail pasien
    Route::get('detail-pasien', [DetailPasienController::class, 'detailpasien'])->name('list-pasien.detailpasien');


    // Workload
    Route::get('workload', [ReportController::class, 'workload'])->name('report.workload');

});