<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Display the login page
    public function showLoginForm()
    {
        return view('login');
    }

    // Process the login form
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        return "Login successful! Welcome, " . e($request->input('email')) . ".";
    }
}