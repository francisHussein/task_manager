@extends('layouts.app')
@section('app')

<h1 class="mt-3">Task Management System</h1>

<a href=" {{route('AddTask')}} "  class="btn btn-outline-success mt-2"  role="button">Add Task</a>
<table class="table mt-1">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Task Name</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tasks as $key => $task)
      <tr>
        <th scope="row"> {{$key+1}} </th>
        <td>{{$task->name}}</td>
        <td>{{$task->description}}</td>
        <td>
            <a href=" {{route('EditTask',[$task->id])}} "  class="btn btn-outline-primary"  role="button">Edit</a>
            <a href="{{route('DeleteTask',[$task->id])}}" class="btn btn-outline-danger" role="button" id="delete">Delete</a>

        </td>
      </tr>

      @endforeach

    </tbody>
  </table>


@endsection
