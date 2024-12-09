<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display a list of students
    public function index()
    {
        // Fetch all students from the database
        $students = Student::all();
        // Pass the data to the view
        return view('students.index', ['students' => $students]);
    }

    // Show a specific student's details
    public function show($id)
    {
        // Find a student by ID or throw a 404 error
        $student = Student::findOrFail($id);
        // Pass the student's data to the view
        return view('students.show', ['student' => $student]);
    }

    // Display a form for creating a new student
    public function create()
    {
        // Render the form view
        return view('students.create');
    }

    // Store a new student in the database
    public function store(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:100',
            'major' => 'required|string|max:100',
        ], [
            'name.required' => '名前は必須です。',
            'age.required' => '年齢は必須です。',
            'major.required' => '専攻は必須です。',
        ]);
    
        // Save to the database
        Student::create($validated);
    
        // Redirect back to the list with a success message
        return redirect('/students')->with('success', '学生が作成されました。');
    }

    // Display a form for editing a student
    public function edit($id)
    {
        // Find the student by ID
        $student = Student::findOrFail($id);
        // Pass the student's data to the edit view
        return view('students.edit', ['student' => $student]);
    }

    // Update a student's details in the database
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:100',
            'major' => 'required|string|max:100',
        ], [
            'name.required' => '名前は必須です。',
            'age.required' => '年齢は必須です。',
            'major.required' => '専攻は必須です。',
        ]);

        // Find the student by ID
        $student = Student::findOrFail($id);
        // Update the student's details
        $student->update($validated);

        // Redirect to the student list with a success message
        return redirect('/students')->with('success', '学生情報が更新されました。');
    }

    // Delete a student from the database
    public function destroy($id)
    {
        // Find the student by ID
        $student = Student::findOrFail($id);
        // Delete the student record
        $student->delete();

        // Redirect to the student list with a success message
        return redirect('/students')->with('success', '学生が削除されました。');
    }
}
