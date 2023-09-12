
@extends("layouts.app")
@section("content")
@if (session()->has("message"))
<div class="alert alert-success mt-2">
    <button class="btn-close float-end" data-bs-dismiss="alert"></button>
    <p>{{session()->get("message")}}</p>
</div>    
@endif
    <div class="card m-2 ">
        <div class="card-body text-center">
            <h3>Students Personal Details</h3>           
            <table class="table-responsive table m-4">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>NAME</td>
                        <td>PHONE</td>
                        <td>YEAR</td>
                        <td>DEPARTMENT</td>
                        <td>ACTION</td>
                    </tr>
                </thead>
                <tbody>
                 @foreach($students as $key=>$Student)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$Student->name }}</td>
                        <td>{{$Student->phone }}</td>
                        <td>{{$Student->year }}</td>
                        <td>{{ $Student->dept }}</td>
                        <td class="d-flex">
                            <div>
                                <a href="{{route("students.show",$Student->id)}}" class="btn-success btn m-2">Show</a>
                                <a href="{{ route("students.edit",$Student->id)}}" class="btn btn-warning m-2">Edit</a>
                            </div>  
                            <form action="{{ route("students.delete",$Student->id) }}" method="POST">
                                   @method("delete")
                                   @csrf
                                   <button class="btn btn-danger m-2">Delete</button>
                             </form> 
                         </td>
                    </tr>
                 @endforeach
                </tbody>
            </table>

            <a href="{{ route("students.create") }}" class="btn btn-primary m-2 rounded-pill">Add Student Details</a>
            <div class="float-end">
                {{$students->links()}}
            </div>
        </div>
    </div>  
@endsection