<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\UserController;
//use Illuminate\Support\Facades\Controller;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;


// Route::get('login', [LoginController::class, 'login'])->name('login');


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');

//Route::get('/', function () {
    //return view('index');
//});

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/', [ProductController::class, 'index'])->name('products.index');   