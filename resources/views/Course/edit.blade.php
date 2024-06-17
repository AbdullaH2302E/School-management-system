@extends('layouts.base')
@section('content')


<center>  <h1>EDIT Courses</h1></center>
<div class="page-content">
  
<form action="{{route('courses_update, $course->id')}}"  method="POST">
    @csrf
    @method('put')
    <div class="col-md-10">
        <label  class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="inputZip" placeholder="" value = "{{$course->name}}">

    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">Teacher Id</label>
        <input type="text" name="teacher_id" class="form-control" id="inputZip" placeholder="" value = "{{$course->teacher_id}}">
    </div>

    <div class="col-10">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>






@endsection