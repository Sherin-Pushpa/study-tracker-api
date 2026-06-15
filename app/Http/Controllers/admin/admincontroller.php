<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentDetails;

class admincontroller extends Controller
{
    public function student()
    {
        return view('admin.student');
    }

    public function StudentDetails()
    {
        $students = StudentDetails::all();

        return view('admin.StudentDetails', compact('students'));
    }

    public function store(Request $request)
    {
        StudentDetails::create([
            'name' => $request->name,
            'age' => $request->age,
            'class' => $request->class,
            'email' => $request->email,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
        ]);

        return redirect()->back()->with('success', 'Student data saved successfully');
    }
    public function edit($id)
    {
        $student = StudentDetails::findOrFail($id);
        return view('admin.EditStudent', compact('student'));
    }
    public function update(Request $request, $id)
    {
        $student = StudentDetails::findOrFail($id);
        $student->update([
             'name' => $request->name,
             'age' => $request->age,
             'class' => $request->class,
             'email' => $request->email,
             'father_name' => $request->father_name,
             'mother_name' => $request->mother_name,
        ]);

        return redirect()->route('student.detail')
                         ->with('success', 'Student updated successfully');
    }
    public function delete($id)
    {
        $student = StudentDetails::findOrFail($id);
        $student->delete();
        return redirect()->back()
                         ->with('success', 'Student deleted successfully');
    }
}