<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  
    public function index()
    {
        $tasks  = Task::latest()->paginate(5);
        return view('tasks.index' , compact('tasks'));
    }


    public function create()
    {
        return view('tasks.create');

    }

  
    public function store(Request $request)
    {
      
        $request->validate ([
            'task_name' => 'required',
            'task_describe' => 'required'

        ]);

        $task  = Task::create($request->all());
             return redirect()->route('tasks.index')
            ->with('success', 'task add successfully');
    }

    
    public function show(Task $task)
    {
        return view('tasks.show' , compact('task'));

    }

 
    public function edit(Task $task)
    {
        return view('tasks.edit' , compact('task'));

    }

   
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'task_name' => 'required',
            'task_describe' => 'required'

        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index')
            ->with('success', 'task updated successfully');
    }

    
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')
        ->with('success', 'task deleted successfully');
    }
}
