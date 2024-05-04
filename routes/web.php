<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::middleware(['isauth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/register', [AuthController::class, 'signup'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [AuthController::class, 'register'])->name('register');
});




Route::middleware(['islogin'])->group(function () {
    Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');
    Route::get('/newsfeed', [HomeController::class, 'newsfeed'])->name('newsfeed');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/search', [HomeController::class, 'search'])->name('search');
    Route::resource('/posts', PostController::class);
});
