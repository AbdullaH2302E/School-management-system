@extends('layouts.base')
@section('content')



<center><h1> Exam Details</h1></center>


        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>ExamType</h4>
                <p>{{$exam->examtype_id}}</p>
                <h4>Name</h4>
                <p>{{$exam->name}}</p>
                <h4>Start Date</h4>
                <p>{{$exam->startdate}}</p>
                <h4>Course Id</h4>
                <p>{{$exam->course_id}}</p>
                <h4>Grade Id</h4>
                <p>{{$exam->grade_id}}</p>
            </div>
            
            <div class="col-md-4"></div>
        </div>







@endsection