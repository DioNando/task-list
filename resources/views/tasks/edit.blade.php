@extends('layouts.app')

@section('title', 'Edit task')

@section('content')
    <h3>{{ $task->title }}</h3>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="{{ $task->description }}">
        </div>
        <div>
            <label for="long_description">Long description</label>
            <input type="text" name="long_description" id="long_description" value="{{ $task->long_description }}">
        </div>
        <div>
            <label for="completed">Completed</label>
            <input type="checkbox" name="completed" id="completed" value="{{ $task->completed }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
