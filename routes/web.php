<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

// Route::get('/tasks', function () use ($tasks) {
//     return view('index', [
//         'tasks' => $tasks
//     ]);
// })->name('tasks.index');

// Route::get('/tasks/{id}', function ($id) use ($tasks) {
//     $task = collect($tasks)->firstWhere('id', $id);

//     if (!$task) {
//         abort(Response::HTTP_NOT_FOUND);
//     }

//     return view('show', [
//         'task' => $task
//     ]);
// })->name('tasks.show');

Route::resource('tasks', TaskController::class);

Route::get('/users', function() {
    return view('users.index');
});
