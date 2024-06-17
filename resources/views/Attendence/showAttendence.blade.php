@extends('layouts.base')
@section('content')

<center><h1> ATTENDENCE Details</h1></center>


        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>User</h4>
                <p>{{$att->user_id}}</p>
                <h4>Date</h4>
                <p>{{$att->date}}</p>
                <h4>Status</h4>
                <p>{{$att->status}}</p>
                <h4>Remarks</h4>
                <p>{{$att->remarks}}</p>
            </div>
            
            <div class="col-md-4"></div>
        </div>





@endsection