<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::select("*")->get();
        return view('student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Student::create(
            [
                'stdID' => $request->ID,
                'Name' => $request->Name,
                'Age' => $request->Age,
                'GPA' => $request->GPA
            ]
        );
        return redirect()->back()->with(['success' => "Create oparation done successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $currentStudent = Student::where('stdID', '=', $id)->first();
        return view('student.edit')->with('studentinfo', $currentStudent);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $currentStudent = Student::where('stdID', $id)->first();
        if (!$currentStudent)
            return redirect()->back()->with(['error' => "Student Not Found"]);
        $currentStudent->update([
            'stdID' => $request->ID,
            'Name' => $request->Name,
            'Age' => $request->Age,
            'GPA' => $request->GPA
        ]);
        $id = $request->ID;
        return redirect()->route('student.edit', $id)->with(['success' => "Edit oparation done successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $currentStudent = Student::where('stdID', $id)->first();
        if (!$currentStudent)
            return redirect()->back()->with(['error' => "Student Not Found"]);
        $currentStudent->delete();
        return redirect()->back()->with(['success' => __('messages.success')]);
    }
}
