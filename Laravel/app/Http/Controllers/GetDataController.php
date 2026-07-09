<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class GetDataController extends Controller
{

    function list(Request $request)
    {
        $studentData = Student::all();
        return view('studentlist', ['student' => $studentData]);
    }

    function delete($id)
    {
        $isDeleted = Student::destroy($id);
        if ($isDeleted) {
            return "Student Delete Successfully";
        } else {
            return "Student Are not Delete";
        }
    }

    function edit($id)
    {
        $student = Student::find($id);
        return view('UpdateInformationView', ['data' => $student]);
    }

    function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->id = $request->id;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->batch = $request->batch;
        $student->save();

        if ($student) {
            return "student detalis update.";
        } else {
            return "student detalis are not update";
        }
    }
    public function search(Request $request)
    {
        $search = $request->search;

        $studentData = Student::where('name', 'LIKE', "%$search%")->get();

        return view('studentlist', [
            'student' => $studentData,
            'search' => $search
        ]);
    }
}
