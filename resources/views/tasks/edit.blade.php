@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <a class="text-medium text-blue-500 underline" href="{{ route('tasks.index') }}">Go Back To Tasks</a>
    <form class="mt-4" action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
            @error('title')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="{{ $task->description }}">
            @error('description')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="long_description">Long description</label>
            <input type="text" name="long_description" id="long_description" value="{{ $task->long_description }}">
        </div>
        <div>
            <label for="completed">Completed</label>
            <input type="checkbox" name="completed" id="completed" value="{{ $task->completed }}">
        </div>
        <p class="text-gray-500 text-sm">
            Created:
            {{ $task->created_at->diffForHumans() }} &middot; Modified: {{ $task->updated_at->diffForHumans() }}
        </p>
        <button type="submit">Update</button>
    </form>
@endsection


