<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Redirect root URL to /students
Route::get('/', function () {
    return redirect('/students');
});

// Simple Hello World Route
Route::get('/hello', function () {
    return 'こんにちは、Laravelの世界へ！'; // Welcome to the world of Laravel!
});

// Route to List All Students
Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index'); // Named route for listing students

// Route to Display Form to Create a New Student
Route::get('/students/create', [StudentController::class, 'create'])
    ->name('students.create'); // Named route for creating a student

// Route to Store a New Student
Route::post('/students', [StudentController::class, 'store'])
    ->name('students.store'); // Named route for storing a student

// Route to Display Form to Edit a Student
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])
    ->name('students.edit'); // Named route for editing a student

// Route to Update an Existing Student
Route::put('/students/{id}', [StudentController::class, 'update'])
    ->name('students.update'); // Named route for updating a student

// Route to Delete a Student
Route::delete('/students/{id}', [StudentController::class, 'destroy'])
    ->name('students.destroy'); // Named route for deleting a student

// Optional: Route to Show a Specific Student
Route::get('/students/{id}', [StudentController::class, 'show'])
    ->name('students.show'); // Named route for showing student details
