@extends('layouts.base')
@section('content')



<h1>ATTENDENCE TYPES</h1>
<a href="{{route('exam_type_create')}}">ADD Attendence</a>
<div class="page-content">
    <!-- Bordered Tables -->
    <table class="table table-bordered table-nowrap">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Course_id</th>
               
            </tr>
        </thead>
        <tbody>
        @foreach($grade as $grd)
                <tr
                        class="table-primary"
                    >
                        <td>{{$grd->name}}</td>
                        <td scope="row">{{$grd->course_id}}</td>
                        <td>{{$grd->status}}</td>
                        <td><a href="{{route('grade_show', $grd->id)}}">Show</a> |
                        <a href="{{route('grade_edit', $grd->id)}}">Edit</a> |
                        <a href="#" onclick="deleteGrade({{$grd->id}})" >Delete</a>
                        <form id="Grade-edit-action-{{ $grd->id }} " action="{{route('grade_delete',$grd->id)}}" method="post">
                            @csrf
                            @method('delete')
                        </form>


                    </td>
                       
                    </tr>
                    @endforeach
                   
                </tbody>
                <tfoot>
                    
                </tfoot>
            </table>
        </div>

        <script>
            function deleteGrade($id){
                if (confirm("Are you sure you want to delete?")) {
                    document.getElementbyId('Grade-edit-action-'+id).submit();
                }
            }
        </script>







@endsection