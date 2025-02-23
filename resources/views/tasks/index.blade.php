@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
    <a href="{{ route('tasks.create') }}">New task</a>
    <div>
        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                <div class="flex">
                    <p>
                        <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
                    </p>
                    <a href="{{ route('tasks.edit', $task) }}">Edit</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>
@endsection
