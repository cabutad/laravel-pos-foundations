@extends('layouts.app')

@section('title', 'About - POS Management System')

@section('content')
<div class="container">
    <h1>About This System</h1>
    <div class="content">
        <p><strong>POS Management System</strong> is a web-based application built with <strong>Laravel</strong> to demonstrate basic point-of-sale operations and account management.</p>
        <p>This system was developed as part of the <strong>Web System Technologies</strong> course (IT0049) at the College of Computer Studies and Multimedia Arts.</p>
        <p><strong>Developer:</strong> Carlos Joaquin Butad</p>
        <p><strong>Features:</strong></p>
        <ul style="margin-left: 1.5rem; margin-bottom: 1rem; line-height: 1.8;">
            <li>Landing page with quick navigation</li>
            <li>About page with system information</li>
            <li>Customer Accounts page with static data listing</li>
            <li>User Accounts page with static data listing</li>
        </ul>
        <p>The application follows the Model-View-Controller (MVC) architecture and uses Laravel's Blade templating engine.</p>
    </div>
</div>
@endsection
