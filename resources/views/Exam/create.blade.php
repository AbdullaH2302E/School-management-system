@extends('layouts.base')
@section('content')


<div class="page-content">
<form action="{{route('exam_store')}}"  method="POST">
    @csrf
    <div class="col-md-10">
        <label  class="form-label">Examtype Id</label>
        <input type="text" name="examtype_id" class="form-control" id="inputZip" placeholder="Zin code">
       
    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="inputZip" placeholder="Zin code">
    </div>
    <div class="col-md-10">
        <label for="inputZip" class="form-label">Start Date</label>
        <input type="date" name="startdate" class="form-control" id="inputZip" placeholder="Zin code">
    </div>
    

    <div class="col-10">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>








@endsection