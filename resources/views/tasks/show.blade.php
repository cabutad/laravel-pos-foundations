@extends('layouts.app')

@section('title', 'Task Details - {{ $task->title }}')

@section('content')
<div class="container">
    <h2>Task Details</h2>

    <div class="card">
        <h3>{{ $task->title }}</h3>
        <p class="subtitle">
            <span class="badge badge-{{ strtolower($task->status) }}">{{ ucfirst($task->status) }}</span>
            created at {{ $task->created_at->format('Y-m-d H:i:s') }}
        </p>

        <p><strong>Description:</strong></p>
        <p>{{ $task->description ?? 'No description provided.' }}</p>

        <div class="mt-3">
            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary">Edit Task</a>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
