@extends('layouts.app')

@section('title', 'New task')

@section('content')
    <a class="text-medium text-blue-500 underline" href="{{ route('tasks.index') }}">Go Back To Tasks</a>
    <form class="mt-4" action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
            @error('title')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
            @error('description')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="long_description">Long description</label>
            <input type="text" name="long_description" id="long_description">
        </div>
        <div>
            <label for="completed">Completed</label>
            <input type="checkbox" name="completed" id="completed">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection


