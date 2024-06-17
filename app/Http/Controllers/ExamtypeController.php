<?php

namespace App\Http\Controllers;

use App\Models\examtype;
use Illuminate\Http\Request;

class ExamtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $examtype = examtype::all();
        return view('Examtype.index',compact('examtype'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       return view ('Examtype.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $examtype = new examtype;
        $examtype->name = $request->name;
        $examtype->description = $request->description;
        $examtype->status = $request->status;
        $examtype->save();
        return redirect()->route('exam_type');
    }

    /**
     * Display the specified resource.
     */
   
     public function show(examtype $examtype,$id)
     {
        
        //  $user = User::all();
        //  $user = examtype::where('user_id',$user)->get();
        $examtype = examtype::findOrFail($id);
        
        
        return view('Examtype.show', compact('examtype'));
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(examtype $examtypeendance,$id)
    {
        // $examtype = examtype::where('id', $id)->first();
        $examtype = examtype::findOrFail($id);
        return view('Examtype.edit',compact('examtype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, examtype $examtypeendance,$id)
    {
        // $examtype = examtype::findOrFail($id);  
        // $examtype->user_id = $request->user_id;
        // $examtype->status = 1;
        // $examtype->date = $request->date;
        // $examtype->save();
        // return view()->back();
        $examtype = examtype::find($id);

        $examtype->update([
            'name' => $request->input('name'),
            'description'  => $request->input('description'),
            'status'  => $request->input('status')
        
        ]);
        return redirect()->route('exam_type');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(examtype $examtypeendance,$id)
    {
        $examtype = examtype::findOrFail($id);
        $examtype->delete();
        return redirect()->route('exam_type');
    }
}
