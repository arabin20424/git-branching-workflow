<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Display the registration form
    public function showForm()
    {
        return view('signup');
    }

    // Process the registration form
    public function register(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $name = $request->input('fullname');

        return "Registration successful! Welcome, " . e($name) . ".";
    }
}