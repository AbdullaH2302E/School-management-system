@extends('layouts.base')
@section('content')



<center><h1> ATTENDENCE Details</h1></center>


        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>Name</h4>
                <p>{{$grade->name}}</p>
                <h4>Course_id</h4>
                <p>{{$grade->course_id}}</p>
                
            </div>
            
            <div class="col-md-4"></div>
        </div>







@endsection