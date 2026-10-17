<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnrollmentRequest;

class EnrollmentController extends Controller
{
    public function showForm()
    {
        return view('enrollment');
    }

    public function submitForm(EnrollmentRequest $request)
    {
        $data = $request->validated();

        return redirect('/enrollment')->with(
            'success',
            'Application submitted successfully for Student ID '
            . $data['student_id'] . '!'
        );
    }
}