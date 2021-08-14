<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index')->with('students', Student::all());
});

Route::get('create-student', function () {

    $validated = request()->validate([
        'name' => 'required|min:3|max:30',
        'email' => 'required|email|unique:students,email',
        'age' => 'required|integer'
    ]);

    Student::create($validated);

    return redirect('/')->with('students', Student::all());
});
