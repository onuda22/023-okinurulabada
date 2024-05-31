<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Wellcome Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Product Single Page
Route::get('/products', function () {
    return view('products');
})->name('products');

// Add Product
// Route::get('/farmer/addproduct', function () {
//     return view('farmer.productcreate');
// })->name('products.create');
Route::middleware(['auth'])->group(function () {
    // Farmer View Product
    Route::resource('/farmer/products', ProductController::class);
});

// //route resource for products
// Route::resource('/products', \App\Http\Controllers\ProductController::class);

// Authentication
Route::group(['middleware' => 'guest'], function () {
    // Register
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register/create', [AuthController::class, 'registerCreate'])->name('registerCreate');
    // Login
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login/auth', [AuthController::class, 'loginAuth'])->name('loginAuth');
    // Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //Tampilkan data di session
    Route::get('/session/tampil', [AuthController::class, 'tampilkanSession']);
});

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/home', [HomeController::class, 'index']);
//     Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
// });