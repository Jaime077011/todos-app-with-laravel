@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Create new Todo</div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('todos.store') }}" method="POST">
                        @csrf
                        <div class="form-group m-2">
                            <input type="tect" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group m-2">
                            <textarea name="description" cols="5" rows="5" placeholder="Description" class="form-control"></textarea>
                        </div>
                        <div class="form-group text-center m-2">
                            <button class="btn btn-success">Create Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>










@endsection