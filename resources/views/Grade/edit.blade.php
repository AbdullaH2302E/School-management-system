@extends('layouts.base')
@section('content')



<center>  <h1>EDIT Grade</h1></center>
<div class="page-content">
  
<form action="{{route('grade_update, $grade->id')}}"  method="POST">
    @csrf
    @method('put')
    <div class="col-md-10">
        <label  class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="inputZip" placeholder="" value = "{{$grade->name}}">

           
        </select>
    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">Course_id</label>
        <input type="text" name="course_id" class="form-control" id="inputZip" placeholder="" value = "{{$grade->course_id}}">
    </div>

    <div class="col-10">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>







@endsection