<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display a list of students
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    // Display a form for creating a new student
    public function create()
    {
        return view('students.create');
    }

    // Store a new student in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:100',
            'major' => 'required|string|max:100',
        ], [
            'name.required' => '名前は必須です。',
            'age.required' => '年齢は必須です。',
            'major.required' => '専攻は必須です。',
        ]);

        Student::create($validated);

        return redirect('/students')->with('success', '学生が作成されました。');
    }

    // Display a form for editing a student
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', ['student' => $student]);
    }

    // Update a student's details in the database
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:100',
            'major' => 'required|string|max:100',
        ]);

        $student = Student::findOrFail($id);
        $student->update($validated);

        return redirect('/students')->with('success', '学生情報が更新されました。');
    }

    // Delete a student from the database
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/students')->with('success', '学生が削除されました。');
    }
}
