<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

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
// Front
Route::get('/', [\App\Http\Controllers\frontController::class, 'index'])->name('front-index');
Route::get('/login', 'frontController@login')->name('login');

// User
//Route::get('/user', [UserController::class, 'index'])->name('user');

// Admin
