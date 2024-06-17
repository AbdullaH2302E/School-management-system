@extends('layouts.base')

@section('content')
<h1>Classroom TYPES</h1>
<a href="{{route('classroom_create')}}">ADD Classroom</a>
<div class="page-content">
    <!-- Bordered Tables -->
    <table class="table table-bordered table-nowrap">
        <thead>
            <tr>
                <th scope="col">Year</th>
                <th scope="col">Grade</th>
                <th scope="col">section</th>
                <th scope="col">Status</th>
                <th scope="col">Remark</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($cls as clsrm)
                <tr
                        class="table-primary"
                    >
                        <td>{{clsrm->year}}</td>
                        <td scope="row">{{clsrm->grade}}</td>
                        <td>{{clsrm->section}}</td>
                        <td>{{clsrm->status}}</td>
                        <td><a href="{{route('classroom_show', clsrm->id)}}">Show</a> |
                        <a href="{{route('classroom_edit', clsrm->id)}}">Edit</a> |
                        <a href="#" onclick="deleteClassroom({{clsrm->id}})" >Delete</a>
                        <form id="Classroom-edit-action-{{ clsrm->id }} " action="{{route('classroom_delete',clsrm->id)}}" method="post">
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
            function deleteClassroom($id){
                if (confirm("Are you sure you want to delete?")) {
                    document.getElementbyId('Classroom-edit-action-'+id).submit();
                }
            }
        </script>
@endsection
