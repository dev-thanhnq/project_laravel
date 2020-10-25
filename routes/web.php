<?php

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

Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin'
], function (){
    // Trang dashboard - trang chủ admin
    Route::get('/dashboard', [\App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('backend.dashboard');
    // Quản lý sản phẩm
    Route::group(['prefix' => 'products'], function(){
        Route::get('/', [\App\Http\Controllers\Backend\ProductController::class, 'index'])->name('backend.product.index');
        Route::get('/create', [\App\Http\Controllers\Backend\ProductController::class, 'create'])->name('backend.product.create');
    });
    //Quản lý người dùng
    Route::group(['prefix' => 'users'], function(){
        Route::get('/', [\App\Http\Controllers\Backend\UserController::class, 'index'])->name('backend.user.index');
        Route::get('/create', [\App\Http\Controllers\Backend\UserController::class, 'create'])->name('backend.user.create');
    });
});
