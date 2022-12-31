<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\Models\APIshow;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class APIshowController extends Controller
{
 

        // Here i make function that get Tasks::data and make it show by json 
    public function get_task_fun()
    {
        $taskss  = Task::get();
        return response()->json($taskss);
    }

            // Here i make function that get users::data and make it show by json 
    public function get_user_fun()
    {
        $users  = User::get();
        return response()->json($users);
    }
   

}
