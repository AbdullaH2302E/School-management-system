@extends('layouts.base')

@section('content')

<center>  <h1>EDIT Attendence</h1></center>
<div class="page-content">
  
<form action="{{route('UpdateAttendence, $att->id')}}"  method="POST">
    @csrf
    @method('put')
    <div class="col-md-10">
        <label  class="form-label">User</label>
        <input type="text" name="user_id" class="form-control" id="inputZip" placeholder="" value = "{{$att->user_id}}">

    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">Date</label>
        <input type="date" name="date" class="form-control" id="inputZip" placeholder="" value = "{{$att->date}}">
    </div>

    <div class="col-10">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>


@endsection