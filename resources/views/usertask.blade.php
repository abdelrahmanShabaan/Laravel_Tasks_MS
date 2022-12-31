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
                    <h2>you sign as user </h2>
                    <a class="btn btn-primary btn-lg" href="{{route('mytask')}}" role="button">click Here to see your daily task</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
