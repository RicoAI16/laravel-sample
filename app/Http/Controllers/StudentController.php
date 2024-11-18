<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Display a list of students
    public function index()
    {
        $students = Student::all(); // Fetch all students
        return view('students', ['students' => $students]);
    }

    // Show a specific student
    public function show($id)
    {
        $student = Student::find($id); // Find student by ID

        if ($student) {
            return view('student', ['student' => $student]);
        } else {
            return view('error', ['message' => '学生が見つかりません。']); // Student not found
        }
    }
}
