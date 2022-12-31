@extends('tasks.layouts')

@section('content')





    <div class="container" style="padding-top: 2%">
        <form  action="{{route('tasks.update' , $task->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlInput1">task name</label>
                <input type="text" name="task_name" value="{{$task->task_name}}" class="form-control"  placeholder="tasks_name">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">task Admin</label>
                <input type="text" name="task_Admin" value="{{$task->task_Admin}}" class="form-control"  placeholder="tasks_name">
            </div>

            
            <div class="form-group">
                <label for="exampleFormControlInput1">task relate</label>
                <input type="text" name="task_relate" value="{{$task->task_relate}}" class="form-control"  placeholder="tasks_name">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Task_detail</label>
                <textarea class="form-control" name="task_describe"  rows="3">
                    {!! $task->task_describe !!}
                </textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>

    </div>
@endsection
