<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Tasks for Today')</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-CQsktF47.css') }}">
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen bg-gray-50">
        <nav class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 flex items-center">
                            <h1 class="text-xl font-bold text-gray-900">Tasks for Today</h1>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="/" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="/about" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">About</a>
                        <a href="{{ route('tasks.index') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Tasks</a>
                        @auth
                            <a href="{{ route('profile.edit') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Profile</a>
                            <form action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium bg-white border border-gray-300 hover:bg-gray-100">
                                    Logout
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium bg-white border border-gray-300 hover:bg-gray-100">Login</a>
                            <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium bg-white border border-gray-300 hover:bg-gray-100">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('build/assets/app-CQsktF47.js') }}"></script>
</body>
</html>

