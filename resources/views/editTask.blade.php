@extends('layouts.app')
@section('app')

<a href=" {{route('tasks')}} "  class="btn btn-outline-primary mt-2"  role="button">Go Back</a>

<div class="mt-2">
    <h2>Edit a Task</h2>
<div class="border border-primary rounded " style="--bs-border-opacity: .5;">
    <form method="POST" action="{{route('edit')}}" class="p-4">
        @csrf
        <input type="hidden" name="id" value="{{$task->id}}">

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Task Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$task->name}}">
          @error('name')
          <p class="text-danger text-xs mt-1">{{$message}}</p>
      @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{$task->description}}">
          @error('description')
          <p class="text-danger text-xs mt-1">{{$message}}</p>
      @enderror
        </div>

        <button type="submit" class="btn btn-success">Edit Task</button>
      </form>
</div>
</div>



@endsection
