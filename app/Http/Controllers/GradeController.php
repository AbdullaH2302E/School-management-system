<?php

namespace App\Http\Controllers;

use App\Models\grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grade = grade::all();
        return view('Grade.index',compact('grade'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       return view ('Grade.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $grade = new grade;
        $grade->name = $request->name;
        $grade->course_id = $request->course_id;
        $grade->save();
        return redirect()->route('grade');
    }

    /**
     * Display the specified resource.
     */
   
     public function show(grade $grade,$id)
     {
        
        //  $user = User::all();
        //  $user = grade::where('user_id',$user)->get();
        $grade = grade::findOrFail($id);
        
        
        return view('Grade.show', compact('grade'));
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(grade $grade,$id)
    {
        // $grade = grade::where('id', $id)->first();
        $grade = grade::findOrFail($id);
        return view('Grade.edit',compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, grade $grade,$id)
    {
        // $grade = grade::findOrFail($id);  
        // $grade->user_id = $request->user_id;
        // $grade->status = 1;
        // $grade->date = $request->date;
        // $grade->save();
        // return view()->back();
        $grade = grade::find($id);

        $grade->update([
            'name' => $request->input('name'),
            'course_id'  => $request->input('course_id')
        
        ]);
        return redirect()->route('grade');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(grade $grade,$id)
    {
        $grade = grade::findOrFail($id);
        $grade->delete();
        return redirect()->route('grade');
    }
}
