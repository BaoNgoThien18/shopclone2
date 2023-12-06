<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
<<<<<<< HEAD
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BankController;
=======
use App\Http\Controllers\OrderController;

>>>>>>> 3bbd1b4ea5d9206007c075c2a899a1143c618e02

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
    Route::resource('/admin/account', AccountController::class);
});


// Authetication
Route::get('/auth/logout', [UserController::class, 'logout'])->name('logout');

    // Ajax
    Route::post('/ajax/auth/register', [UserController::class, 'postRegister']);
    Route::post('/ajax/auth/login', [UserController::class, 'postLogin']);


Route::middleware(['checklogin'])->group(function() {
    // Auth
    Route::get('/auth/register', [UserController::class, 'register'])->name('register');
    Route::get('/auth/login', [UserController::class, 'login'])->name('login');
});

Route::middleware(['user'])->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('home');
<<<<<<< HEAD
    // Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/bank', [BankController::class, 'index'])->name('bank');
    Route::get('/bill', [BankController::class, 'index'])->name('bill');
=======
    Route::post('/ajax/getProductOnCategory', [IndexController::class, 'getProductOnCategory']);
    Route::post('/ajax/totalPayment', [IndexController::class, 'totalPayment']);
    Route::post('/ajax/buy', [OrderController::class, 'buy']);
>>>>>>> 3bbd1b4ea5d9206007c075c2a899a1143c618e02

});



