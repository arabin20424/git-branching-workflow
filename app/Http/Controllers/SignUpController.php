<?php
namespace App\Http\Controllers;
use App\Http\Requests\SignUpRequest; // Import Form Request
use Illuminate\Http\Request;
class SignUpController extends Controller
{
// Display the signup page
public function showForm()
{
return view('signup');
}

// Process submission using SignUpRequest
public function submitForm(SignUpRequest $request)
{
$name = $request->input('fullname');
return "Registration successful! Welcome, " . e($name) . ".";
}
}