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
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\InforController;


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
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('admin/settings', [AdminController::class, 'settings']);
    Route::post('admin/saveSetting', [AdminController::class, 'saveSetting'])->name('saveSetting');
    Route::resource('/admin/category', CategoryController::class);
    Route::resource('/admin/product', ProductController::class);
    Route::resource('/admin/account', AccountController::class);
    Route::resource('/admin/infor', InforController::class);


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
    Route::get('/history', [IndexController::class, 'history']);
    Route::post('/ajax/getProductOnCategory', [IndexController::class, 'getProductOnCategory']);
    Route::post('/ajax/totalPayment', [IndexController::class, 'totalPayment']);
    Route::post('/ajax/buy', [OrderController::class, 'buy']);
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    // Route::get('/bank', [BankController::class, 'index'])->name('bank');
    // Route::get('/bill', [BillController::class, 'index'])->name('bill');

});

