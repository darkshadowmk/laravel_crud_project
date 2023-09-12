
@extends('layouts.app')
@section('content')
  <div class="row justify-content-center">
    <div class="card col-8 col-md-5">
      <div class="card-body">
          <form action="{{ route("students.update",$student->id) }}" method="post" class="was-validated" novalidate>
            @method("put") 
            @csrf
              <h3 class="text-center">Student Details</h3>
              <label for="name">Name:</label><br>
              <input type="text" name="name" placeholder='enter student name' class="form-control is-invalid my-1 mb-2" value="{{$student->name}}" required >
              @if ($errors->has("name"))
                <p class="invalid-feedback">
                    {{ $errors->first('name') }}
                </p>   
              @endif
              <label for="gender" class="my-2">Gender:</label><br>
              <input type="radio" name="gender" value="male" class="form-check-input  mx-2" {{$student->gender == "male"?"checked":""}} required>Male
              <input type="radio" name="gender" value="female" class="form-check-input mx-2" {{$student->gender == "female"?"checked":""}} required>Female<br>
              @if ($errors->has("gender"))
                <p class="invalid-feedback">
                    {{ $errors->first("gender") }}
                </p>   
              @endif
              <label for="email" class="mt-2 mb-1">Email:</label><br>            
              <input type="email" name="email" placeholder='enter email address' class="form-control is-invalid" value="{{ $student->email}}" required><br>
              @if ($errors->has("email"))
                <p class="invalid-feedback">
                    {{ $errors->first("email") }}
                </p>   
              @endif
              <label for="phone" class="mb-1">Phone:</label><br>
              <input type="text" name="phone" placeholder='enter phone number' class="form-control is-invalid" value="{{ $student->phone}}" required><br>
              @if ($errors->has("phone"))
                <p class="invalid-feedback">
                    {{ $errors->first("phone") }}
                </p>   
              @endif
              <label for="year">Year:</label><br>
              <select name="year" id="" class="form-control is-invalid mt-1" required>
                  <option value="1styear" name="1styear" {{$student->year == "1styear"?"selected":""}}>1st year</option>
                  <option value="2ndyear" name="2ndyear" {{$student->year == "2ndyear"?"selected":""}} >2nd year</option>
                  <option value="3rdyear" name="3rdyear" {{$student->year == "3rdyear"?"selected":""}}>3rd year</option>
              </select>
              @if ($errors->has("year"))
                <p class="invalid-feedback">
                    {{ $errors->first("year") }}
                </p>   
              @endif<br>
              <label for="dept">Department:</label><br>
              <select name="dept" id="" class="form-control mt-1">
                  <option value="BA.Tamil" name='BA.Tamil' {{$student->dept == "BA.Tamil"?"selected":""}}>BA.Tamil</option>
                  <option value="BA.English" name='BA.English' {{$student->dept == "BA.English"?"selected":""}} >BA.English</option>
                  <option value="Bsc.Maths" name="Bsc.Maths" {{$student->dept == "Bsc.Maths"?"selected":""}} >Bsc.Maths</option>
                  <option value="Bsc.Physics" name="Bsc.Physics" {{$student->dept == "Bsc.Physics"?"selected":""}} >Bsc.Physics</option>
                  <option value="Bsc.Chemistry" name="Bsc.Chemistry" {{$student->dept == "Bsc.Chemistry"?"selected":""}} >Bsc.Chemistry</option>
                  <option value="Bsc.IT" name="Bsc.IT" {{$student->dept == "Bsc.IT"?"selected":""}}>Bsc.IT</option>
              </select>
              @if ($errors->has("dept"))
                <p class="invalid-feedback">
                    {{ $errors->first("dept") }}
                </p>   
              @endif<br>
              <label for="certificate">Certificate:</label><br>
               <input type="checkbox" class="form-check-input m-1 " name="certificate" value="HSC"  {{$student->certificate == "HSC"?"checked":""}} required>HSC<br>
               
               @if ($errors->has("certificate"))
                <p class="invalid-feedback">
                    {{ $errors->first("certificate") }}
                </p>   
              @endif
              <label for="address" class="mt-2 mb-1">Address:</label><br>
              <input type="text" name="address" class="form-control" value="{{$student->address}}" required><br>
              @if ($errors->has("address"))
                <p class="invalid-feedback">
                    {{ $errors->first("address") }}
                </p>   
              @endif
              <div class="text-center">
                <button class="btn btn-primary rounded-pill me-4">Update Details</button>
                <a href="{{ route("students.view") }}" class="btn btn-primary rounded-pill">Back</a>
              </div>     
        </form>
      </div>
     </div> 
  </div>
@endsection
