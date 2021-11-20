@extends('layouts.mainLayout')
@section('contents')
<div class="container">
    <h1>Edit Student</h1>
    <form action="{{route('student.update',$studentinfo['stdID'])}}" method="post">
        @csrf
        @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('error')}}
                </div>
            @endif
        <div class="form-group">
            <label for="ID">ID</label>
            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="{{$studentinfo['stdID']}}">
          </div>
          <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="Name" placeholder="Enter Name" value="{{$studentinfo['Name']}}">
          </div>
          <div class="form-group">
            <label for="Age">Age</label>
            <input type="text" class="form-control" name="Age" placeholder="Enter Age" value="{{$studentinfo['Age']}}">
          </div>
          <div class="form-group">
            <label  for="GPA">GPA</label>
            <input type="text" class="form-control" name="GPA" placeholder="Enter GPA" value="{{$studentinfo['GPA']}}">
          </div>
          <button type="submit" class="btn btn-primary">Edit</button>
    </form>

</div>
@stop
