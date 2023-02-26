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
                    <div class="col text-center">
                        <a href="{{ route('todos.index')}}" class="btn btn-primary btn-lg float-none m-2 align-center">Todos</a>
                        <a href="{{ route('todos.create')}}" class="btn btn-success btn-lg float-none m-2 align-center">Create Todo</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
