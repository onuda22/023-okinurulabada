<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;




Route::middleware(['auth'])->group(function () {
    // Wellcome Page
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Cart
    Route::get('/cart', function () {
        return view('cart');
    })->name('cart');
    // Notification
    Route::get('/notification', function () {
        return view('notification');
    })->name('notification');
    // Status Order
    Route::get('/status', function () {
        return view('status');
    })->name('status.order');
    // Product Single Page
    Route::get('/products', function () {
        return view('products');
    })->name('products');

    // Farmer View Product
    Route::resource('/farmer/products', ProductController::class);
    // Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Authentication
Route::group(['middleware' => 'guest'], function () {
    // Register
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register/create', [AuthController::class, 'registerCreate'])->name('registerCreate');
    // Login
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login/auth', [AuthController::class, 'loginAuth'])->name('loginAuth');

    //Tampilkan data di session
    Route::get('/session/tampil', [AuthController::class, 'tampilkanSession']);
});

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/home', [HomeController::class, 'index']);
//     Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
// });