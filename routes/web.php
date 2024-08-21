<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurBusinessController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/our-business', [OurBusinessController::class, 'index'])->name('our_business');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about_us');
Route::get('/careers', [CareersController::class, 'index'])->name('careers');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::get('/explore-the-lineup', [ExploreController::class, 'index'])->name('explore');
