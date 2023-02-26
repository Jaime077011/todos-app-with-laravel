@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">{{ $todo->name }}</div>
                <div class="card-body">
                    {{ $todo->description }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
