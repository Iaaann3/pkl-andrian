<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiswaController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('sample', function () {
    return 'Halo Iannn';
});

Route::get('sample2', function () {
    return view('sample2');
});

Route::get('sample3', [LatihanController::class, 'index']);
Route::resource('siswa', SiswaController::class);
Route::get('ortu', [SiswaController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/testing', function () {
    return view('layouts.admin');
});

Route::get('/latihan-js', function () {
    return view('latihan-js');
});

Route::group([
    'prefix'     => 'admin',
    'as'         => 'admin.',
    'middleware' => ['auth', IsAdmin::class],
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/',[EcommerceController::class, 'index'])->name('home');
Route::group([
    'middleware' => ['auth']
], function () {
    Route::post('/order', [EcommerceController::class, 'createOrder'])->name('order.create');
    Route::post('/checkout', [EcommerceController::class, 'checkOut'])->name('checkout');
    Route::get('/my-orders', [EcommerceController::class, 'myOrders'])->name('order.my');
    Route::get('/my-orders/{id}', [EcommerceController::class, 'orderDetail'])->name('order.detail');
    Route::post('/order/update-quantity', [EcommerceController::class, 'updateQuantity'])->name('order.update.quantity');
    Route::post('/order/remove-item', [EcommerceController::class, 'removeItem'])->name('order.remove.item');
});
