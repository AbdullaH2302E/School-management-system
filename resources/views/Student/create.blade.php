@extends('layouts.base')
@section('content')


<div class="page-content">
<form action="{{route('student_store')}}"  method="POST">
    @csrf
    <div class="col-md-10">
        <label  class="form-label">firstname</label>
        <input type="text" name="" class="form-control" id="inputZip" placeholder="Zin code">
  
    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">lastname</label>
        <input type="text" name="lastname" class="form-control" id="inputZip" placeholder="Zin code">
    </div>
    
    <div class="col-md-10">
        <label for="inputZip" class="form-label">email</label>
        <input type="email" name="email" class="form-control" id="inputZip" placeholder="Zin code">
    </div>
    
    <div class="col-md-10">
        <label for="inputZip" class="form-label">password</label>
        <input type="password" name="password" class="form-control" id="inputZip" placeholder="Zin code">
    </div>
    
    <div class="col-md-10">
        <label for="inputZip" class="form-label">dob</label>
        <input type="date" name="dob" class="form-control" id="inputZip" placeholder="Zin code">
    </div>
    
    <div class="col-md-10">
        <label for="inputZip" class="form-label">phone</label>
        <input type="text" name="phone" class="form-control" id="inputZip" placeholder="Zin code">
    </div>
    
    <div class="col-md-10">
        <label for="inputZip" class="form-label">status</label>
        <input type="text" name="status" class="form-control" id="inputZip" placeholder="Zin code">
    </div>
    
    <div class="col-md-10">
        <label for="inputZip" class="form-label">role</label>
        <input type="text" name="role" class="form-control" id="inputZip" placeholder="Zin code">
    </div>
    
    <div class="col-md-10">
        <label for="inputZip" class="form-label">image</label>
        <input type="image" name="image" class="form-control" id="inputZip" placeholder="Zin code">
    </div>

    <div class="col-10">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>







@endsection


'firstname',
        'lastname',
        'email',
        'password',
        'dob',
        'phone',
        'status',
        'role',
        'image',