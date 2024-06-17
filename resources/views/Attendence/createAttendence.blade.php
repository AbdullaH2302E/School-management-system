@extends('layouts.base')
@section('content')

<div class="page-content">
<form action="{{route('StoreAttendence')}}"  method="POST">
    @csrf
    <div class="col-md-10">
        <label  class="form-label">User</label>
        <input type="text" name="user_id" class="form-control" id="inputZip" placeholder="Zin code">
          
           
    
    </div>

    <div class="col-md-10">
        <label for="inputZip" class="form-label">Date</label>
        <input type="date" name="date" class="form-control" id="inputZip" placeholder="Zin code">
    </div>

    <div class="col-10">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>




@endsection