
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\EnrollmentController;

// Home page
Route::get('/', function () {
    return view('login');
});

// Login routes
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])
    ->name('login.perform');

// Route to display form
Route::get('/signup', [SignUpController::class, 'showForm']);
// Route to process form submission
Route::post('/signup', [SignUpController::class, 'submitForm']);

// Registration routes
Route::get('/register', [RegistrationController::class, 'showForm']);
Route::post('/register', [RegistrationController::class, 'register']);

// Signup routes
Route::get('/signup', [SignUpController::class, 'showForm']);
Route::post('/signup', [SignUpController::class, 'submitForm']);

//Enrollment Routes
Route::get('/enrollment', [EnrollmentController::class, 'showForm']);
Route::post('/enrollment', [EnrollmentController::class, 'submitForm']);