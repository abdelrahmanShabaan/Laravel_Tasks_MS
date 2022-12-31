@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container text-center">
                    <h2>You are now sign in as admin</h2>
                    <a class="btn btn-primary btn-lg" href="{{route('tasks.index')}}" role="button">click Here to see Tasks page</a>
                </div>
                <div class="container text-center" style="margin-top:20px">
                <a class="btn btn-warning btn-lg" href="{{route('api_tasks')}}" role="button">click to see Api for tasks</a>
                <a class="btn btn-success btn-lg" href="{{route('api_users')}}" role="button">click to see Api for users</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
