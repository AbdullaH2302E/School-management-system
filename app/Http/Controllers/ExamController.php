<?php

namespace App\Http\Controllers;

use App\Models\exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exam = exam::all();
        return view('Exam.index',compact('exam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       return view ('Exam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exam = new exam;
        $exam->examtype_id = $request->examtype_id;
        $exam->name = $request->name;
        $exam->startdate = $request->startdate;
        $exam->course_id = $request->course_id;
        $exam->startdate = $request->grade_id;

        $exam->save();
        return redirect()->route('exam');
    }

    /**
     * Display the specified resource.
     */
   
     public function show(exam $exam,$id)
     {
        
        //  $user = User::all();
        //  $user = exam::where('user_id',$user)->get();
        $exam = exam::findOrFail($id);
        
        
        return view('Exam.show', compact( 'exam'));
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(exam $exam,$id)
    {
        // $exam = exam::where('id', $id)->first();
        $exam = exam::findOrFail($id);
        return view('Exam.edit',compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, exam $exam,$id)
    {
        // $exam = exam::findOrFail($id);  
        // $exam->user_id = $request->user_id;
        // $exam->status = 1;
        // $exam->date = $request->date;
        // $exam->save();
        // return view()->back();
        $exam = exam::find($id);

        $exam->update([
            'examtype_id' => $request->input('examtype_id'),
            'name'  => $request->input('name'),
            'startdate'  => $request->input('startdate'),
            'course_id' => $request->input('course_id'),
            'grade_id'  => $request->input('grade_id')

        ]);
        return redirect()->route('exam');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(exam $examendance,$id)
    {
        $exam = exam::findOrFail($id);
        $exam->delete();
        return redirect()->route('exam');
    }
}
