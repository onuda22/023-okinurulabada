<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function () {
    return view('products');
})->name('products');

// Route::get('/login', [AuthController::class, 'loginView'])->name('login');
// Route::post('/login/form', [AuthController::class, 'login'])->name('login.form');

// Route::get('/register', [AuthController::class, 'registerView'])->name('register');
// Route::post('/register/form', [AuthController::class, 'register'])->name('register.form');

Route::group(['middleware' => 'guest'], function () {
    // Register
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register/create', [AuthController::class, 'registerCreate'])->name('registerCreate');
    // Login
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login/auth', [AuthController::class, 'loginAuth'])->name('loginAuth');
});

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/home', [HomeController::class, 'index']);
//     Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
// });