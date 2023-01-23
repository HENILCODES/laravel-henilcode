<?php

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

Route::get('/', function () {
    return view('home');
});

Route::view('signup', 'signup')->name('signup');
Route::view('login', 'login')->name('login');

Route::prefix('check')->group(function () {
    Route::resource('signup', UserController::class)->only('store');
});


Route::get('user/table', [UserController::class, 'create'])->name('userlist');

