@extends('layouts.base')
@section('content')

<div class="page-content">
<form action="{{route('classroom_store')}}"  method="POST">
    @csrf
    <div class="col-md-10">
        <label  class="form-label">Year</label>
        <input type="year" name="text" class="form-control" id="inputZip" placeholder="Zin code">

    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">GRADE</label>
        <input type="grade" name="date" class="form-control" id="inputZip" placeholder="Zin code">
    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">Section</label>
        <input type="section" name="date" class="form-control" id="inputZip" placeholder="Zin code">
    </div>

    <div class="col-10">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>








@endsection