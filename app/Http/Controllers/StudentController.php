<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Student::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'city' =>'required',
            'fees' =>'required',
        ]);
        return Student::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentController  $studentController
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Student::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentController  $studentController
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentController $studentController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentController  $studentController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $student = Student::find($id);
        $student->update($request->all());
        return $student;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentController  $studentController
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       return student::find($id)->delete();
    }

    /**
     * Search base on City.
     *
     * @param  \App\Models\StudentController  $studentController
     * @return \Illuminate\Http\Response
     */
    public function search($city)
    {
       return student::where('city',$city)->get();
    }
}
