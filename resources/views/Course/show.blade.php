@extends('layouts.base')
@section('content')



<center><h1> Course Details</h1></center>


        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>Name</h4>
                <p>{{$course->name}}</p>
                <h4>Description</h4>
                <p>{{$course->description}}</p>
                <h4>Teacher Id</h4>
                <p>{{$course->teacher_id}}</p>
                
            </div>
            
            <div class="col-md-4"></div>
        </div>







@endsection