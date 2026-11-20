@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<div class="container">
    <h2>Create New Task</h2>

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

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Title *</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            @error('title')
                <span class="help-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="status">Status *</label>
            <select name="status" id="status" required>
                <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
            @error('status')
                <span class="help-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Create Task</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
