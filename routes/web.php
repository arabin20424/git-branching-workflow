<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;

Route::get('/', function () {
    return view('register');

Route::get('/register', [RegistrationController::class, 'showForm']);


});


Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::post('/login', [LoginController::class, 'authenticate'])->name('login.perform');