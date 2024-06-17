@extends('layouts.base')
@section('content')


<center><h1> Classroom Details</h1></center>


        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>User</h4>
                <p>{{cls->grade}}</p>
                <h4>Date</h4>
                <p>{{cls->year}}</p>
                <h4>Section</h4>
                <p>{{cls->section}}</p>
                <h4>Status</h4>
                <p>{{cls->status}}</p>
                <h4>Remarks</h4>
                <p>{{cls->remarks}}</p>
            </div>
            
            <div class="col-md-4"></div>
        </div>








@endsection