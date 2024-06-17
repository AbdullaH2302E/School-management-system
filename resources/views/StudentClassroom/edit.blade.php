@extends('layouts.base')
@section('content')



<center>  <h1>EDIT Student Classroom</h1></center>
<div class="page-content">
  
<form action="{{route('student_classroom_update, $stucls->id')}}"  method="POST">
    @csrf
    @method('put')
    <div class="col-md-10">
        <label  class="form-label">Classroom Id</label>
        <input type="text" name="classroom_id" class="form-control" id="inputZip" placeholder="" value = "{{$stucls->classroom_id}}">

    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">Student Id</label>
        <input type="text" name="student_id" class="form-control" id="inputZip" placeholder="" value = "{{$stucls->student_id}}">
    </div>

    <div class="col-10">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>







@endsection