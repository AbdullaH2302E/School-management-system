<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = course::all();
        return view('Course.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       return view ('Course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new course;
        $course->name = $request->name;
        $course->description = $request->description;
        $course->teacher_id = $request->teacher_id;
        $course->save();
        return redirect()->route('course');
    }

    /**
     * Display the specified resource.
     */
   
     public function show(course $course,$id)
     {
        
        //  $user = User::all();
        //  $user = course::where('user_id',$user)->get();
        $course = course::findOrFail($id);
        
        
        return view('Course.show', compact('course'));
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(course $course,$id)
    {
        // $course = course::where('id', $id)->first();
        $course = course::findOrFail($id);
        return view('Course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, course $course,$id)
    {
        // $course = course::findOrFail($id);  
        // $course->user_id = $request->user_id;
        // $course->status = 1;
        // $course->date = $request->date;
        // $course->save();
        // return view()->back();
        $course = course::find($id);

        $course->update([
            'name' => $request->input('name'),
            'description'  => $request->input('description'),
            'teacher_id'  => $request->input('teacher_id'),
           
       

        ]);
        return redirect()->route('course');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(course $courseendance,$id)
    {
        $course = course::findOrFail($id);
        $course->delete();
        return redirect()->route('course');
    }
}
