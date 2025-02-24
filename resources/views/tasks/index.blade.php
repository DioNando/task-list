@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
    <a class="text-medium text-blue-500 underline mb-4" href="{{ route('tasks.create') }}">New Task</a>
    @if (session()->has('success'))
        <div class="text-gray-500">{{ session('success') }}</div>
    @endif
    <div>
        @forelse ($tasks as $task)
            <div class="task flex flex-col mt-3 pb-2">
                <p class="text-lg">
                    <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
                </p>
                <div class="flex gap-3">
                    <a href="{{ route('tasks.edit', $task) }}" class="text-yellow-500">Edit</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="mt-3">There are no tasks to display!</div>
        @endforelse
        @if ($tasks->count())
            <nav class="mt-4">
                {{ $tasks->links() }}
            </nav>
        @endif
    </div>
@endsection

@section('styles')
    <style>
        .task {
            border-bottom: 1px solid #ccc
        }
    </style>
@endsection


