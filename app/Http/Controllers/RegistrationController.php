<?php 
namespace App\Http\Controllers\Auth; 
use Illuminate\Http\Request;
class registrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

}