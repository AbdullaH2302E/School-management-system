<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stu = student::all();
        return view('Student.index',compact('stu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       return view ('Student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $stu = new student;
        $stu->firstname = $request->firstname;
        $stu->lastname = $request->lastname;
        $stu->email = $request->email;
        $stu->password = $request->password;
        $stu->dob = $request->dob;
        $stu->phone = $request->phone;
        $stu->status = $request->status;
        $stu->role = $request->role;
        $stu->image = $request->image;
        $stu->save();
        return redirect()->route('student');
    }

    /**
     * Display the specified resource.
     */
   
     public function show(student $student,$id)
     {
        
        //  $user = User::all();
        //  $user = student::where('user_id',$user)->get();
        $stu = student::findOrFail($id);
         return view('Student.show', compact('stu'));
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student,$id)
    {
        // $stu = student::where('id', $id)->first();
        $stu = student::findOrFail($id);
        return view('Student.edit',compact('stu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student,$id)
    {
        // $stu = student::findOrFail($id);  
        // $stu->user_id = $request->user_id;
        // $stu->status = 1;
        // $stu->date = $request->date;
        // $stu->save();
        // return view()->back();
        $stu = student::find($id);

        $stu->update([
            'firstname'  => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'dob' => $request->input('dob'),
            'phone' => $request->input('phone'),
            'status' => $request->input('status'),
            'role' => $request->input('role'),
            'image' => $request->input('image')
        ]);
        return redirect()->route('student');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student,$id)
    {
        $stu = student::findOrFail($id);
        $stu->delete();
        return redirect()->route('student');
    }
}
