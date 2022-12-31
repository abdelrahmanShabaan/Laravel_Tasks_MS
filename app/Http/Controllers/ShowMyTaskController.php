<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ShowMyTaskController extends Controller
{
    

    public function index(){
        $tasks  = Task::latest()->paginate(5);
        return view('tasks.daily_task_user' , compact('tasks'));
    }


    public function back()
    {
        return view('usertask');
    }
}
