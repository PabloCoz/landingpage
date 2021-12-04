<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', HomeController::class)->name('home');

Route::get('enrolled', [UserController::class, 'index'])->name('enrolled');

Route::post('inscription', [ClientController::class, 'store'])->name('inscription');

Route::get('index', [ClientController::class, 'index'])->middleware('auth')->name('index');

Route::get('clients', [ClientController::class, 'show'])->middleware('auth')->name('clients');
