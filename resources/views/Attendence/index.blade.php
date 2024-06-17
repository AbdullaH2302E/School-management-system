@extends('layouts.base')

@section('content')


<h1>ATTENDENCE TYPES</h1>
<a href="{{route('CreateAttendence')}}">ADD Attendence</a>
<div class="page-content">
    <!-- Bordered Tables -->
    <table class="table table-bordered table-nowrap">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">User</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Remark</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($att as $atten)
                <tr
                        class="table-primary"
                    >
                        <td>{{$atten->user_id}}</td>
                        <td scope="row">{{$atten->date}}</td>
                        <td>{{$atten->status}}</td>
                        <td><a href="{{route('ShowAttendence', $atten->id)}}">Show</a> |
                        <a href="{{route('EditAttendence', $atten->id)}}">Edit</a> |
                        <a href="#" onclick="deleteAttendence({{$atten->id}})" >Delete</a>
                        <form id="Attendence-edit-action-{{ $atten->id }} " action="{{route('DeleteAttendence',$atten->id)}}" method="post">
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
            function deleteAttendence($id){
                if (confirm("Are you sure you want to delete?")) {
                    document.getElementbyId('Attendence-edit-action-'+id).submit();
                }
            }
        </script>
        
@endsection
