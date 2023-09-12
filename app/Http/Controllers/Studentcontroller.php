<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $students = Student::orderby("id","desc")->paginate(3);
        return view("index",compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("create");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate(
            ["name"=>"required",
             "gender"=>"required",
             "email"=>"required|unique:students,email|email",
             "phone"=>"required|numeric",
             "year"=>"required",
             "dept"=>"required",
             "certificate"=>"required",
             "address"=>"required"]);
        
        $data = $request->except('_token');
        Student::create($data);
        return redirect()->route("students.view")->withMessage("succesfully created.");        
        dd("created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view("show",compact("student"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    { 
        //  $student = Student::find($id);
          return view("edit",compact("student"));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {   
        $data=$request->all();
        // $student= Student::find($id);
        $student->update($data);
        return redirect()->route("students.view")->withMessage("succesfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route("students.view")->withMessage("succesfully deleted");
    }
}
