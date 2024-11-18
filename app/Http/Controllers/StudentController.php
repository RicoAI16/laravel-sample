<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display a list of students
    public function index()
    {
        $students = [
            ['名前' => '山田 太郎', '年齢' => 20, '学科' => '情報学科'],
            ['名前' => '佐藤 花子', '年齢' => 21, '学科' => '経済学科'],
        ];
        return view('students', ['students' => $students]);
    }

    // Show a specific student
    public function show($id)
    {
        $students = [
            1 => ['名前' => '山田 太郎', '年齢' => 20, '学科' => '情報学科'],
            2 => ['名前' => '佐藤 花子', '年齢' => 21, '学科' => '経済学科'],
        ];

        if (isset($students[$id])) {
            return view('student', ['student' => $students[$id]]);
        } else {
            return view('error', ['message' => '学生が見つかりません。']); // Student not found
        }
    }
}
