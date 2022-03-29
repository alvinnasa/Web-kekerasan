<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\KorbanController;
use App\Http\Controllers\PelakuController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\CountController;
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
Route::resource('kasus', UserController::class);
Route::resource('korban', KorbanController::class);
Route::resource('pelaku', PelakuController::class);
Route::resource('pelayanan', PelayananController::class);
Route::get('/', [App\Http\Controllers\CountController::class,'count']);

