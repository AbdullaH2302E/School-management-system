@extends('layouts.base')
@section('content')




<center><h1> Student Details</h1></center>


        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>firstname</h4>
                <p>{{$stu->firstname}}</p>
                <h4>lastname</h4>
                <p>{{$stu->lastname}}</p>
                <h4>email</h4>
                <p>{{$stu->email}}</p>
                <h4>password</h4>
                <p>{{$stu->password}}</p>
                <h4>phone</h4>
                <p>{{$stu->phone}}</p>
                <h4>status</h4>
                <p>{{$stu->status}}</p>
                <h4>dob</h4>
                <p>{{$stu->dob}}</p>
                <h4>role</h4>
                <p>{{$stu->role}}</p>
                <h4>image</h4>
                <p>{{$stu->image}}</p>
               
            </div>
            
            <div class="col-md-4"></div>
        </div>






@endsection