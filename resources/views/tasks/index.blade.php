@extends('tasks.layouts')

@section('content')

    <div class="jumbotron container">
        <a class="btn btn-primary btn-lg" href="{{route('tasks.create')}}" role="button">Create new Task</a>
    </div>

    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-primary" role="alert">
                {{$message}}
            </div>
            @endif
    </div>

        <div class="container">
            <table class="table table table-dark table-borderless">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">tasks name</th>
                    <th scope="col">tasks admin</th>
                    <th scope="col">tasks relate</th>
                    <th scope="col" style="width: 400px">tasks_description</th>
                </tr>
                </thead>
                <tbody>
                @php
                $i =0;
                @endphp
                @foreach ($tasks as $item)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$item->task_name}}</td>
                        <td>{{$item->task_Admin}} </td>
                        <td>{{$item->task_relate}} </td>
                        <td>{{$item->task_describe}} </td>
                        <td>
                            <div class="container" >
                                <div class="row">
                                    <div class="col-sm">
                                        <a class="btn btn-success" href=" {{route('tasks.edit', $item->id)}}"> Edit</a>
                                    </div>
                                    <div class="col-sm">
                                        <a class="btn btn-primary" href="{{route('tasks.show', $item->id)}}"> Show</a>
                                    </div>
                                    <div class="col-sm">
                                        <form action="{{route('tasks.destroy', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button  type="submit"  class="btn btn-danger">Delete</button>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {!! $tasks->links() !!}
        </div>

        <div class="container">
        <a class="btn btn-primary btn-lg" href="{{route('home')}}" role="button">Back to Home</a>

        </div>
@endsection
