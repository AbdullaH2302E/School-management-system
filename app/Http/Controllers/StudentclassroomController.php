<?php

namespace App\Http\Controllers;

use App\Models\studentclassroom;
use Illuminate\Http\Request;

class StudentclassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stucls = studentclassroom::all();
        return view('StudentClassroom.index',compact('stucls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       return view ('StudentClassroom.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $stucls = new studentclassroom;
        $stucls->classroom_id = $request->classroom_id;
        $stucls->student_id = $request->student_id;
        $stucls->save();
        return redirect()->route('student_classroom');
    }

    /**
     * Display the specified resource.
     */
   
     public function show(studentclassroom $studentclassroom,$id)
     {
        
        //  $user = User::all();
        //  $user = studentclassroom::where('user_id',$user)->get();
        $stucls = studentclassroom::findOrFail($id);
        
        
        return view('StudentClassroom.show', compact('stucls'));
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(studentclassroom $studentclassroom,$id)
    {
        // $stucls = studentclassroom::where('id', $id)->first();
        $stucls = studentclassroom::findOrFail($id);
        return view('StudentClassroom.edit',compact('stucls'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, studentclassroom $studentclassroom,$id)
    {
        // $stucls = studentclassroom::findOrFail($id);  
        // $stucls->user_id = $request->user_id;
        // $stucls->status = 1;
        // $stucls->date = $request->date;
        // $stucls->save();
        // return view()->back();
        $stucls = studentclassroom::find($id);

        $stucls->update([
            'classroom_id' => $request->input('classroom_id'),
            'student_id'  => $request->input('student_id')
        ]);
        return redirect()->route('student_classroom');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(studentclassroom $studentclassroom,$id)
    {
        $stucls = studentclassroom::findOrFail($id);
        $stucls->delete();
        return redirect()->route('student_classroom');
    }
}
