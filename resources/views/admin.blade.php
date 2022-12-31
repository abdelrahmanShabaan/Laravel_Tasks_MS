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
            </div>
        </div>
    </div>
</div>
@endsection
