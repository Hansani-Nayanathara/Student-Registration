<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student ::all();
        return view('Student.Index', compact('students'));
    }

    public function create()
    {
        return view('Student.create');
    }

    public function store(request $request)
    {
        $rules=[
            'first_name'=>'required|string',
            'address'=>'required|string',
        ];

        $validator=Validator::make($request->all(),$rules,$messages = [
            'first_name.required'=>'Need first name',
            'address.required'=>'Need address',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->contact_nu = $request->contact_nu;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->save();


        /* method 2
        $student=Student::create($request->all());
        return "success";
        */
        return redirect()->route('Student.create');
    }

    public function edit($student_id)
    {
        $student = Student::where('id',$student_id)->first();
        return view('Student.edit',compact('student'));
    }

    public function update(request $request,$student_id)
    {
        $student = Student::where('id',$student_id)->first();

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->contact_nu = $request->contact_nu;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->save();

        return redirect()->route('Student.name');
    }

    public function delete($student_id)
    {
        $student = Student::where('id',$student_id)->delete();
        return redirect()->route('Student.name');
    }
}
