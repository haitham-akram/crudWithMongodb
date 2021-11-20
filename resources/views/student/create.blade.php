@extends('layouts.mainLayout')
@section('contents')
<div class="container">
    <h1>Create a new Student</h1>
    <form action="{{route('student.store')}}" method="post">
        @csrf
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif

        <div class="form-group">
            <label for="ID">ID</label>
            <input type="text" class="form-control" name="ID" placeholder="Enter ID">
          </div>
          <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="Name" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="Age">Age</label>
            <input type="text" class="form-control" name="Age" placeholder="Enter Age">
          </div>
          <div class="form-group">
            <label  for="GPA">GPA</label>
            <input type="text" class="form-control" name="GPA" placeholder="Enter GPA">
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
    </form>

</div>
@stop
