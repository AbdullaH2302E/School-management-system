@extends('layouts.base')
@section('content')


<h1>Exam TYPES</h1>
<a href="{{route('exam_create')}}">ADD Exam</a>
<div class="page-content">
    <!-- Bordered Tables -->
    <table class="table table-bordered table-nowrap">
        <thead>
            <tr>
                <th scope="col">ExamType Id</th>
                <th scope="col">Name</th>
                <th scope="col">Start Date</th>
                <th scope="col">Courseid</th>
                <th scope="col">grade_id</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($exam as $exm)
                <tr
                        class="table-primary"
                    >
                        <td>{{$exm->examtype_id}}</td>
                        <td scope="row">{{$exm->name}}</td>
                        <td>{{$exm->startdate}}</td>
                        <td>{{$exm->course_id}}</td>
                        <td>{{$exm->grade_id}}</td>
                        <td><a href="{{route('exam_show', $exm->id)}}">Show</a> |
                        <a href="{{route('exam_edit', $exm->id)}}">Edit</a> |
                        <a href="#" onclick="deleteExam({{$exm->id}})" >Delete</a>
                        <form id="Exam-edit-action-{{ $exm->id }} " action="{{route('exam_delete',$exm->id)}}" method="post">
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
            function deleteExam($id){
                if (confirm("Are you sure you want to delete?")) {
                    document.getElementbyId('Exam-edit-action-'+id).submit();
                }
            }
        </script>








@endsection