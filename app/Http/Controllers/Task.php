<?php

namespace App\Http\Controllers;

use App\Models\Task as ModelsTask;
use Illuminate\Http\Request;

class Task extends Controller
{
    public function tasks() {
        $tasks = ModelsTask::all();
        return view('task',[
            'tasks' => $tasks
        ]);
    }

    public function AddTask()
    {
       return view('addTask');
    }

    public function store(Request $request)
{
    $formFields = $request->validate([
        'name' => 'required',
        'description' => 'required'

    ]);

    $task = ModelsTask::create($formFields);


    if ($task) {
        return redirect()->route('tasks')->with('success', 'Success! Task Created Successfully');
    }
    else {
        return redirect()->route('tasks')->with('failed', 'Failed! Task not Created Successfully');
    }
}

    public function EditTask($id){
        $task = ModelsTask::findOrFail($id);
        return view('editTask', compact('task'));

    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required'

        ]);

       $task =  ModelsTask::findOrFail($id)->update($formFields);

        if ($task) {
            return redirect()->route('tasks')->with('success', 'Success! Task Updated Successfully');
        }
        else {
            return redirect()->route('tasks')->with('failed', 'Failed! Task not Updated Successfully');
        }
    }

    public function DeleteTask($id) {

        $task = ModelsTask::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Task Added Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('tasks')->with($notification);

    }
}
