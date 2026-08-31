<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('login');
});

// Render the login Blade view
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Process submission
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.perform');