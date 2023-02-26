@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
        
                <h1 class='text-center my-5'>Todos Page</h1>

                <div class='card'>
                    <div class='card-header'>
                        Todos
                    </div>
                    <div class="card-body">
                        <ul class='list-group'>
                            @foreach($todos as $todo)
                                <li class='list-group-item'>
                                    
                                    
                                    
                                    <form method="POST" action="{{route('todos.destroy',$todo->id)}}">
                                        {{ $todo->name }}
                                        @csrf
                                        @method('DELETE')
                                        <input type='submit'class="btn btn-danger btn-sm float-end m-2" value='Delete'/>
                                        <a href="#" class="btn btn-success btn-sm float-end m-2">Edit</a>

                                        <a href="{{ route('todos.show', $todo->id) }}" class="btn btn-primary btn-sm float-end m-2">view</a>
                                    </form>
                                </li>

                            @endforeach
                        </ul>
                    </div>
                    
                </div>
                <div class="justify-content-center m-2">{{ $todos->links()}}</div>
                </div>
            </div>
            
    </div>
    
@endsection


{{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
        
                <h1 class='text-center my-5'>Todos Page</h1>

                <div class='card'>
                    <div class='card-header'>
                        Todos
                    </div>
                    <div class="card-body">
                        <ul class='list-group'>
                            @foreach($todos as $todo)
                                <li class='list-group-item'>
                                    
                                    
                                    
                                    <form method="POST" action="{{route('todos.destroy',$todo->id)}}">
                                        {{ $todo->name }}
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('todos.show', $todo->id) }}" class="btn btn-primary btn-sm float-end m-2">view</a>
                                        <input type='submit'class="btn btn-danger btn-sm float-end m-2" value='Delete'/>
                                    </form>
                                </li>

                            @endforeach
                        </ul>
                    </div>
                    
                </div>
                <div class="justify-content-center m-2">{{ $todos->links()}}</div>
                </div>
            </div>
            
    </div> --}}