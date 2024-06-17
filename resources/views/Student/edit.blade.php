@extends('layouts.base')
@section('content')



<center>  <h1>EDIT student</h1></center>
<div class="page-content">
  
<form action="{{route('student_update, $stu->id')}}"  method="POST">
    @csrf
    @method('put')
    <div class="col-md-10">
        <label  class="form-label">FirstName</label>
        <input type="text" name="firstname" class="form-control" id="inputZip" placeholder="" value = "{{$stu->firstname}}">
    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">lastname</label>
        <input type="text" name="lastname" class="form-control" id="inputZip" placeholder="" value = "{{$stu->lastname}}">
    </div>
    <div class="col-md-10">
        <label for="inputZip" class="form-label">email</label>
        <input type="text" name="email" class="form-control" id="inputZip" placeholder="" value = "{{$stu->email}}">
    </div>
    <div class="col-md-10">
        <label for="inputZip" class="form-label">password</label>
        <input type="text" name="password" class="form-control" id="inputZip" placeholder="" value = "{{$stu->password}}">
    </div>
    <div class="col-md-10">
        <label for="inputZip" class="form-label">dob</label>
        <input type="date" name="dob" class="form-control" id="inputZip" placeholder="" value = "{{$stu->dob}}">
    </div>
    <div class="col-md-10">
        <label for="inputZip" class="form-label">phone</label>
        <input type="text" name="phone" class="form-control" id="inputZip" placeholder="" value = "{{$stu->phone}}">
    </div>
    <div class="col-md-10">
        <label for="inputZip" class="form-label">status</label>
        <input type="text" name="status" class="form-control" id="inputZip" placeholder="" value = "{{$stu->status}}">
    </div>
    <div class="col-md-10">
        <label for="inputZip" class="form-label">role</label>
        <input type="text" name="role" class="form-control" id="inputZip" placeholder="" value = "{{$stu->role}}">
    </div>
    <div class="col-md-10">
        <label for="inputZip" class="form-label">image</label>
        <input type="text" name="image" class="form-control" id="inputZip" placeholder="" value = "{{$stu->image}}">
    </div>

    <div class="col-10">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>







@endsection