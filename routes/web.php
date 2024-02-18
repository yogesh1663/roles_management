<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::resource('users', UserController::class);
