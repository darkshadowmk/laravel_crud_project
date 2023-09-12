
@extends('layouts.app')
@section('content')
  <div class="row justify-content-center">
    <div class="card col-8 col-md-5">
      <div class="card-body">
          <h4 class="text-center my-3">Student Details</h4>
          <p>Name : {{ $student->name }}</p>
          <p>Gender : {{ $student->gender }}</p>
          <p>Email : {{ $student->email}}</p>
          <p>Phone : {{ $student->phone }}</p> 
          <p>Year : {{ $student->year }}</p>
          <p>Department : {{ $student->dept }}</p>
          <p>Certificate: {{ $student->certificate }}</p>
          <p>Address : {{ $student->address }}</p>
          <a href="{{ route("students.view") }}" class="btn btn-primary">Back</a>
      </div>
     </div> 
  </div>
@endsection
