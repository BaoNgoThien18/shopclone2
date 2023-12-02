<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;


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

Route::middleware(['admin'])->group(function() {
    //Admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::resource('/admin/category', CategoryController::class);
    Route::resource('/admin/product', ProductController::class);
});



Route::get('/auth/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['checklogin'])->group(function() {
    // Auth
    Route::get('/auth/register', [UserController::class, 'register'])->name('register');
    Route::get('/auth/login', [UserController::class, 'login'])->name('login');

    // Ajax
    Route::post('/ajax/auth/register', [UserController::class, 'postRegister']);
    Route::post('/ajax/auth/login', [UserController::class, 'postLogin']);
});

Route::middleware(['user'])->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('home');
});


