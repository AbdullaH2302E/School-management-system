@extends('layouts.base')
@section('content')



<h1>Courses TYPES</h1>
<a href="{{route('courses_create')}}">ADD Courses</a>
<div class="page-content">
    <!-- Bordered Tables -->
    <table class="table table-bordered table-nowrap">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Teacher Id</th>
               
            </tr>
        </thead>
        <tbody>
        @foreach($course as $crs)
                <tr
                        class="table-primary"
                    >
                        <td>{{$crs->name}}</td>
                        <td scope="row">{{$crs->description}}</td>
                        <td>{{$crs->teacher_id}}</td>
                        <td><a href="{{route('courses_show', $crs->id)}}">Show</a> |
                        <a href="{{route('courses_edit', $crs->id)}}">Edit</a> |
                        <a href="#" onclick="deleteCourse({{$crs->id}})" >Delete</a>
                        <form id="Courses-edit-action-{{ $crs->id }} " action="{{route('courses_delete',$crs->id)}}" method="post">
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
            function deleteCourse($id){
                if (confirm("Are you sure you want to delete?")) {
                    document.getElementbyId('Courses-edit-action-'+id).submit();
                }
            }
        </script>





@endsection