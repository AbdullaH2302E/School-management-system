<?php

namespace App\Http\Controllers;

use App\Models\attendance;
use Illuminate\Http\Request;
use App\Models\user;


class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $att = attendance::all();
        return view('Attendence.index',compact('att'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       return view ('Attendence.createAttendence');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $att = new attendance;
        $att->user_id = $request->user_id;
        $att->status = 1;
        $att->date = $request->date;
        $att->save();
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
   
     public function show(attendance $attendance,$id)
     {
        
         $users = User::all();
         $users = attendance::where('user_id',$users)->get();
        $att = attendance::findOrFail($id);
        
        
        return view('Attendence.showAttendence', compact('users', 'att'));
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(attendance $attendance,$id)
    {
        // $att = attendance::where('id', $id)->first();
        $att = attendance::findOrFail($id);
        return view('Attendence.editAttendence',compact('att'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, attendance $attendance,$id)
    {
        // $att = attendance::findOrFail($id);  
        // $att->user_id = $request->user_id;
        // $att->status = 1;
        // $att->date = $request->date;
        // $att->save();
        // return view()->back();
        $att = attendance::find($id);

        $att->update([
            'user_id' => $request->input('user_id'),
            'date'  => $request->input('date'),
            'status'  => $request->input('status'),
            'remarks' => $request->input('remarks')
       

        ]);
        return redirect()->route('index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(attendance $attendance,$id)
    {
        $att = attendance::findOrFail($id);
        $att->delete();
        return redirect()->route('index');
    }

    public function approve(Request $request)
    {
        // $attendance = Attendance::findOrFail($request->id);
        // $attendance->update(['remark' => 'Approved']);

        // return response()->json(['message' => 'Attendance approved successfully']);
        $attendance = Attendance::find($request->id);
        if ($attendance) {
            // Perform your approval logic here
            $attendance->status = 1; // Example logic to mark as approved
            $attendance->save();

            return response()->json(['message' => 'Attendance approved successfully.']);
        } else {
            return response()->json(['message' => 'Attendance not found.'], 404);
        }
    }
    }

