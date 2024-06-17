@extends('layouts.base')
@section('content')


<h1>ATTENDENCE TYPES</h1>
<a href="{{route('student_classroom_create')}}">ADD Student Classroom</a>
<div class="page-content">
    <!-- Bordered Tables -->
    <table class="table table-bordered table-nowrap">
        <thead>
            <tr>
                <th scope="col">Classroom Id</th>
                <th scope="col">Student Id</th>
               
            </tr>
        </thead>
        <tbody>
        @foreach($stucls as $studentclassroom)
                <tr
                        class="table-primary"
                    >
                        <td>{{$studentclassroom->classroom_id}}</td>
                        <td scope="row">{{$studentclassroom->student_id}}</td>
                        <td><a href="{{route('student_classroom_show', $studentclassroom->id)}}">Show</a> |
                        <a href="{{route('student_classroom_edit', $studentclassroom->id)}}">Edit</a> |
                        <a href="#" onclick="deleteStudentClassroom({{$studentclassroom->id}})" >Delete</a>
                        <form id="StudentClassroom-edit-action-{{ $studentclassroom->id }} " action="{{route('student_classroom_delete',$studentclassroom->id)}}" method="post">
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
            function deleteStudentClassroom($id){
                if (confirm("Are you sure you want to delete?")) {
                    document.getElementbyId('StudentClassroom-edit-action-'+id).submit();
                }
            }
        </script>








@endsection