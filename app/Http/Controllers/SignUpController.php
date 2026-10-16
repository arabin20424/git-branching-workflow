<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;

class SignUpController extends Controller
{
    // Display the signup page
    public function showForm()
    {
        return view('signup');
    }

    // Process signup form submission
    public function submitForm(SignUpRequest $request)
    {
        $name = $request->input('fullname');

        return "Registration successful! Welcome, " . e($name) . ".";
    }
}