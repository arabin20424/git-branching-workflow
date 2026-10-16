<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
/**
* Determine if the user is authorized to make this request.
*/
public function authorize(): bool
{
return true; // IMPORTANT: Change from false to true
}
/**
* Get the validation rules that apply to the request.
*/
public function rules(): array
{
return [
'fullname' => 'required|min:3',
'email' => 'required|email',
'password' => 'required|min:6',
];
}
}
