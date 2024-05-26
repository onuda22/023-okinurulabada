<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/login/form', [AuthController::class, 'login'])->name('login.form');

Route::get('/register', [AuthController::class, 'registerView'])->name('register');
Route::post('/register/form', [AuthController::class, 'register'])->name('register.form');
