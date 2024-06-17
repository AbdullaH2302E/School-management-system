@extends('layouts.base')
@section('content')



<h1>EXam type TYPES</h1>
<a href="{{route('exam_type_create')}}">ADD Examtype</a>
<div class="page-content">
    <!-- Bordered Tables -->
    <table class="table table-bordered table-nowrap">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
               
            </tr>
        </thead>
        <tbody>
        @foreach($examtype as $exmtyp)
                <tr
                        class="table-primary"
                    >
                        <td>{{$exmtyp->name}}</td>
                        <td scope="row">{{$exmtyp->description}}</td>
                        <td>{{$exmtyp->status}}</td>
                        <td><a href="{{route('exam_type_show', $exmtyp->id)}}">Show</a> |
                        <a href="{{route('exam_type_edit', $exmtyp->id)}}">Edit</a> |
                        <a href="#" onclick="deleteExamtype({{$exmtyp->id}})" >Delete</a>
                        <form id="Examtype-edit-action-{{ $exmtyp->id }} " action="{{route('exam_type_delete',$exmtyp->id)}}" method="post">
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
            function deleteExamtype($id){
                if (confirm("Are you sure you want to delete?")) {
                    document.getElementbyId('Examtype-edit-action-'+id).submit();
                }
            }
        </script>







@endsection