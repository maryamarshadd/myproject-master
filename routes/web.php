<?php 

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Routes accessible to guests (not authenticated)
Route::match(['get', 'post'], 'register', [AuthController::class, 'register'])->name('register');
Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])->name('login');

// Routes accessible to everyone
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::match(['get', 'post'], 'profile', [AuthController::class, 'profile'])->name('profile');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
