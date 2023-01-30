<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\student\StoreStudentRequest;
use App\Http\Requests\student\UpdateStudentRequest as StudentUpdateStudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }
    public function create()
    {
        return view('student.create');
    }
    public function store(StoreStudentRequest $request)
    {
        $student = $request->all();
        $student['hobby'] = implode(',', $request->hobby);
        $imageName = $request->photo->getClientOriginalName();
        $student['photo'] = $imageName;
        $request->photo->move('upload/profile/', $imageName);
        Student::create($student);
        return redirect()->route('student.index');
    }
    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show', compact('student'));
    }
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.update', compact('student'));
    }
    public function update(StudentUpdateStudentRequest $request, $id)
    {
        $student = $request->all();
        $student['hobby'] = implode(',', $request->hobby);
        if ($request->photo) {
            $imageName = $request->photo->getClientOriginalName();
            $request->photo->move('upload/profile/', $imageName);
            $student['photo'] = $imageName;
        }
        Student::find($id)->update($student);
        return redirect()->route('student.index');
    }
    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect()->route('student.index');
    }
}
