<?php

namespace App\Http\Controllers;

use App\Models\classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cls = classroom::all();
        return view('Classroom.index',compact('cls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view ('Classroom.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cls = new classroom;
        $cls->year = $request->year;
        $cls->grade = $request->grade;
        $cls->section = $request->section;
        $cls->status = $request->status;
        $cls->remarks = $request->remarks;
        $cls->save();
        return redirect()->route('classroom');
    }

    /**
     * Display the specified resource.
     */
    public function show(classroom $classroom,$id)
    {
         //  $user = User::all();
        //  $user = attendance::where('user_id',$user)->get();
        $cls = classroom::findOrFail($id);
        
        
        return view('Classroom.show', compact('cls'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(classroom $classroom,$id)
    {
        // $att = attendance::where('id', $id)->first();
        $cls = classroom::findOrFail($id);
        return view('Classroom.edit',compact('cls'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, classroom $classroom)
    {
         // $att = attendance::findOrFail($id);  
        // $att->user_id = $request->user_id;
        // $att->status = 1;
        // $att->date = $request->date;
        // $att->save();
        // return view()->back();
        $cls = classroom::find($id);

        $cls->update([
            
            'year'=> $request->input('year'),
            'grade' => $request->input('grade'),
            'section' => $request->input('section'),
            'status'  => $request->input('status'),
            'remarks' => $request->input('remarks')
        ]);
        return redirect()->route('classroom');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(classroom $classroom)
    {
        $cls = classroom::findOrFail($id);
        $cls->delete();
        return redirect()->route('classroom');
    }
}
