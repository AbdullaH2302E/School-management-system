@extends('layouts.base')
@section('content')




<center><h1> Examtype  Details</h1></center>


        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>User</h4>
                <p>{{$examtype->name}}</p>
                <h4>Date</h4>
                <p>{{$examtype->description}}</p>
                <h4>Status</h4>
                <p>{{$examtype->status}}</p>
            </div>
            
            <div class="col-md-4"></div>
        </div>






@endsection