<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class GetDataController extends Controller
{
    public function list()
    {
        $studentData = Student::paginate(5);
        return view('studentlist', ['student' => $studentData]);
    }

    public function delete($id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->delete();
            return redirect('/getstudent/list')->with('success', 'Student Deleted Successfully');
        }
        return redirect('/getstudent/list')->with('error', 'Student Not Found');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        if ($student) {
            return view('UpdateInformationView', ['data' => $student]);
        }
        return redirect('/getstudent/list')->with('error', 'Student Not Found');
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->name = $request->name;
            $student->email = $request->email;
            $student->batch = $request->batch;
            $student->save();
            return redirect('/getstudent/list')->with('success', 'Student Details Updated Successfully');
        }
        return redirect('/getstudent/list')->with('error', 'Student Details Could Not Be Updated');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $studentData = Student::where('name', 'LIKE', "%$search%")
            ->paginate(5)
            ->appends(['search' => $search]);

        return view('studentlist', [
            'student' => $studentData,
            'search' => $search
        ]);
    }

    public function pagination()
    {
        $studentData = Student::paginate(5);
        return view('studentlist', ['student' => $studentData]);
    }

    public function multipleDelete(Request $request)
    {
        $ids = $request->ids;
        if (!empty($ids)) {
            Student::whereIn('id', $ids)->delete();
            return redirect('/getstudent/list')->with('success', 'Selected Students Deleted Successfully');
        }
        return redirect('/getstudent/list')->with('error', 'No Students Selected for Deletion');
    }
}
