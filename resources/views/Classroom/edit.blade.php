@extends('layouts.base')
@section('content')



<center>  <h1>EDIT Classroom</h1></center>
<div class="page-content">
  
<form action="{{route('classroom_update, $cls->id')}}"  method="POST">
    @csrf
    @method('put')
    <div class="col-md-10">
        <label  class="form-label">Year</label>
        <input type="text" name="year" class="form-control" id="inputZip" placeholder="" value = "{{$cls->year}}">

    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">Grade</label>
        <input type="text" name="grade" class="form-control" id="inputZip" placeholder="" value = "{{$cls->grade}}">
    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">Section</label>
        <input type="text" name="section" class="form-control" id="inputZip" placeholder="" value = "{{$cls->section}}">
    </div>

    <div class="col-10">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>





@endsection