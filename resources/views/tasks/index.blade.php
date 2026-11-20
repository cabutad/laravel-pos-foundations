@extends('layouts.app')

@section('title', 'Task List')

@section('content')
<div class="container">
    <h1>Task List</h1>
    <p class="subtitle">Manage your tasks - view, create, edit, and delete tasks.</p>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="mb-3">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Add New Task</a>
    </div>

    @if($tasks->isEmpty())
        <p>No tasks found. <a href="{{ route('tasks.create') }}">Create your first task</a>.</p>
    @else
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>
                            <span class="badge badge-{{ strtolower($task->status) }}">{{ ucfirst($task->status) }}</span>
                        </td>
                        <td>{{ $task->created_at->format('Y-m-d H:i') }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('tasks.show', $task) }}" class="btn btn-secondary">View</a>
                                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this task?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
