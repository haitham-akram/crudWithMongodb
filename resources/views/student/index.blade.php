@extends('layouts.mainLayout')
@section('contents')
<div class="container">
    <h1>Students Table</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>GPA</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
@foreach ($students as $student )
            <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$student['stdID']}}</td>
                <td>{{$student['Name']}}</td>
                <td>{{$student['Age']}}</td>
                <td>{{$student['GPA']}}</td>
                <td><a href="{{route('student.edit',$student['stdID'])}}" class="pr-3"><button class="btn btn-secondary">Edit</button></a>
                    <a href="{{route('student.delete',$student['stdID'])}}"><button class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
