<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [DisplayController::class, 'index'])->name('index');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/advertisement', [AdvertisementController::class, 'index'])->name('advertisement');
Route::post('/advertisement', [AdvertisementController::class, 'store']);

Route::get('/update/{advertisement}/edit', [AdvertisementController::class, 'display'])->name('display');
Route::put('/update/{advertisement}', [AdvertisementController::class, 'update'])->name('update');
Route::delete('/update/{advertisement}/delete', [AdvertisementController::class, 'destroy'])->name('delete');

Route::get('/details/{advertisement}', [ItemController::class, 'index'])->name('details');