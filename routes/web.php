<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', [RegistrationController::class, 'showForm']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])
    ->name('login.perform');