<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
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
        $request->photo->move('upload/', $imageName);
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
    public function update(UpdateStudentRequest $request, $id)
    {

        $student = $request->all();
        $student['hobby'] = implode(',', $request->hobby);
        if ($request->photo) {
            $imageName = $request->photo->getClientOriginalName();
            $request->photo->move('upload/', $imageName);
            $student['photo'] = $imageName;
            $updateList = $student;
        } else {
            $updateList = $student;
        }
        Student::find($id)->update($updateList);
        return redirect()->route('student.index');
    }
    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect()->route('student.index');
    }
}
