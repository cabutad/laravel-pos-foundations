@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center">
    <h1 class="text-3xl font-bold text-gray-900">Welcome to Tasks for Today</h1>
    <p class="mt-4 text-gray-600">A simple Task Management System built with Laravel.</p>

    <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-3 max-w-4xl mx-auto">
        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">Full CRUD</h2>
            <p class="mt-2 text-sm text-gray-600">Create, read, update, and delete tasks with validation.</p>
        </div>
        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">Authentication</h2>
            <p class="mt-2 text-sm text-gray-600">Breeze authentication protects management actions.</p>
        </div>
        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">Email Notifications</h2>
            <p class="mt-2 text-sm text-gray-600">Automatic email notification when a task is marked as done.</p>
        </div>
    </div>
</div>
@endsection