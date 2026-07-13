<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return Student::all();
    }

    public function create()
    {
        return "Student Form";
    }

    public function store(Request $request)
    {
        return "Student Saved";
    }

    public function show(Student $student)
    {
        return $student;
    }

    public function edit(Student $student)
    {
        return "Edit Student " . $student->name;
    }

    public function update(Request $request, Student $student)
    {
        return "Student Updated";
    }

    public function destroy(Student $student)
    {
        return "Student Deleted";
    }
}
