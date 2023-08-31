@extends('layouts.app')
@section('app')

<a href=" {{route('tasks')}} "  class="btn btn-outline-primary mt-2"  role="button">Go Back</a>

<div class="mt-2">
    <h2>Adding a Task</h2>
<div class="border border-primary rounded " style="--bs-border-opacity: .5;">
    <form method="POST" action="{{route('store')}}" class="p-4">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Task Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{old('name')}}">
          @error('name')
          <p class="text-danger text-xs mt-1">{{$message}}</p>
      @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{old('description')}}">
          @error('description')
          <p class="text-danger text-xs mt-1">{{$message}}</p>
      @enderror
        </div>

        <button type="submit" class="btn btn-success">Add Task</button>
      </form>
</div>
</div>



@endsection
