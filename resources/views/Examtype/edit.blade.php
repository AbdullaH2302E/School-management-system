@extends('layouts.base')
@section('content')

<center>  <h1>EDIT Examtype</h1></center>
<div class="page-content">
  
<form action="{{route('exam_type_update, $examtype->id')}}"  method="POST">
    @csrf
    @method('put')
    <div class="col-md-10">
        <label  class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="inputZip" placeholder="" value = "{{$examtype->name}}">

        
    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" id="inputZip" placeholder="" value = "{{$examtype->description}}">
    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">Status</label>
        <input type="text" name="status" class="form-control" id="inputZip" placeholder="" value = "{{$examtype->status}}">
    </div>

    <div class="col-10">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>









@endsection