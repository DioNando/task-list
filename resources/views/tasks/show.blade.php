@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <a class="text-medium text-blue-500 underline" href="{{ route('tasks.index') }}">Go Back To Tasks</a>
    <div class="mt-4">
        <p>{{ $task->description }}</p>
        <p>{{ $task->long_description }}</p>
        <p>{{ $task->completed }}</p>
    </div>
@endsection
