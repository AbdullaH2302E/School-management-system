@extends('layouts.base')
@section('content')


<h1>ATTENDENCE TYPES</h1>
<a href="{{route('CreateAttendence')}}">ADD Attendence</a>
<div class="page-content">
    <!-- Bordered Tables -->
    <table class="table table-bordered table-nowrap">
        <thead>
            <tr>
       <th scope="col"> firstname </th>
       <th scope="col"> lastname </th>
       <th scope="col"> email </th>
       <th scope="col"> password </th>
       <th scope="col"> dob </th>
       <th scope="col"> phone </th>
       <th scope="col"> status </th>
       <th scope="col"> role </th>
       <th scope="col"> image </th>   
 
            </tr>
        </thead>
        <tbody>
        @foreach($stu as $student)
                <tr
                        class="table-primary"
                    >
                        <td>{{$student->firstname}}</td>
                        <td scope="row">{{$student->lastname}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->password}}</td>
                        <td>{{$student->dob}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->status}}</td>'
                        <td>{{$student->role}}</td>
                        <td>{{$student->image}}</td>
image                        <td><a href="{{route('student_show', $student->id)}}">Show</a> |
                        <a href="{{route('student_edit', $student->id)}}">Edit</a> |
                        <a href="#" onclick="deleteStudent({{$student->id}})" >Delete</a>
                        <form id="Student-edit-action-{{ $student->id }} " action="{{route('student_delete',$student->id)}}" method="post">
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
            function deleteStudent($id){
                if (confirm("Are you sure you want to delete?")) {
                    document.getElementbyId('Student-edit-action-'+id).submit();
                }
            }
        </script>








@endsection