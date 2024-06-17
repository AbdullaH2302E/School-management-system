@extends('layouts.base')
@section('content')





<center><h1> ATTENDENCE Details</h1></center>


        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>User</h4>
                <p>{{$stucls->classroom_id}}</p>
                <h4>Date</h4>
                <p>{{$stucls->student_id}}</p>
               
            
            <div class="col-md-4"></div>
        </div>





@endsection