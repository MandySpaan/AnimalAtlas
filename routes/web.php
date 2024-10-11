<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Auth routes
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// User routes
Route::get('profile', [UserController::class, 'profile'])->name('user.profile');

// Animal routes
Route::get('animals', [AnimalController::class, 'index'])->name('animals.index');
Route::post('/animals/{animal}/like', [AnimalController::class, 'like'])->name('animals.like');
