@extends('layouts.app')

@section('title', 'Edit Task - {{ $task->title }}')

@section('content')
<div class="container">
    <h2>Edit Task</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title *</label>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}" required>
            @error('title')
                <span class="help-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4">{{ old('description', $task->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="status">Status *</label>
            <select name="status" id="status" required>
                <option value="pending" {{ old('status', $task->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="in_progress" {{ old('status', $task->status) == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                <option value="completed" {{ old('status', $task->status) == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
            @error('status')
                <span class="help-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Update Task</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
