@extends('layouts.base')
@section('content')


<div class="page-content">
<form action="{{route('exam_type_store')}}"  method="POST">
    @csrf
    <div class="col-md-10">
        <label  class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="inputZip" placeholder="Zin code">
           
        
    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" id="inputZip" placeholder="Zin code">
    </div>
    <div class="col-md-10">
        <label for="inputZip" class="form-label">Status</label>
        <input type="text" name="status" class="form-control" id="inputZip" placeholder="Zin code">
    </div>

    <div class="col-10">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>







@endsection