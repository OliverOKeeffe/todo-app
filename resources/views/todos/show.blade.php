@extends('layouts.myApp')

@section('content')
<h1>Show todo</h1>

<p>{{ $todo->title }}</p>
<p>{{ $todo->body }}</p>
<p>{{ $todo->user }}</p>

<div>
    <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>

    <form method="POST" action="{{ route('todos.destroy' , $todo->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    
</div>

@endsection