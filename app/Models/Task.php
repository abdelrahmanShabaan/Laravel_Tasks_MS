<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected  $fillable = [ 'task_name' , 'task_describe' , 'task_Admin' , 'task_relate'];
}
