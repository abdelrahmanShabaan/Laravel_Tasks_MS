@extends('tasks.layouts')

@section('content')


 



    <div class="container" style="padding-top: 2%">

            <div class="form-group">
                <label for="exampleFormControlInput1">{{$task->task_name}}</label>

            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">{{$task->task_Admin}}</label>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">{{$task->task_describe}}</label>
            </div>

            

            <div class="form-group">
                    {!! $task->task_describe !!}
            </div>

    </div>
@endsection
