<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'POS Management System')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f6f9; color: #333; }
        .sidebar { width: 250px; background: #2563eb; color: #fff; position: fixed; top: 0; left: 0; height: 100vh; display: flex; flex-direction: column; padding: 1.5rem 0; }
        .sidebar a { color: #fff; text-decoration: none; padding: 0.8rem 1.5rem; display: block; border-radius: 6px; margin-bottom: 0.5rem; transition: background 0.2s; }
        .sidebar a:hover, .sidebar a.active { background: #1d4ed8; }
        .sidebar-brand { font-size: 1.2rem; font-weight: 600; padding: 1rem 1.5rem 0.5rem; display: block; }
        .content { margin-left: 250px; padding: 2rem; min-height: 80vh; }
        .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; }
        .page-header h1 { color: #1e3a5f; }
        .btn { padding: 0.5rem 1rem; border: none; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block; }
        .btn-primary { background: #2563eb; color: #fff; }
        .btn-primary:hover { background: #1d4ed8; }
        .btn-secondary { background: #6b7280; color: #fff; }
        .btn-secondary:hover { background: #4b5563; }
        .btn-danger { background: #ef4444; color: #fff; }
        .btn-danger:hover { background: #dc2626; }
        .alert { padding: 0.75rem 1rem; border-radius: 4px; margin-bottom: 1rem; }
        .alert-success { background: #d1fae5; color: #065f46; border: 1px solid #86efac; }
        .alert-danger { background: #fee2e2; color: #991b1b; border: 1px solid #fca5a5; }
        .table-container { background: #fff; border-radius: 8px; padding: 1rem; box-shadow: 0 1px 3px rgba(0,0,0,0.08); }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 0.75rem 1rem; text-align: left; border-bottom: 1px solid #e5e7eb; }
        th { background: #f3f4f6; font-weight: 600; }
        tr:hover td { background: #f9fafb; }
        .badge { display: inline-block; padding: 0.2rem 0.6rem; border-radius: 12px; font-size: 0.8rem; font-weight: 500; }
        .badge-active { background: #d1fae5; color: #065f46; }
        .badge-inactive { background: #fee2e2; color: #991b1b; }
        .avatar-container { width: 40px; height: 40px; border-radius: 50%; overflow: hidden; display: inline-flex; align-items: center; justify-content: center; }
        .avatar-container img { width: 100%; height: 100%; object-fit: cover; }
        .placeholder-avatar { width: 100%; height: 100%; background: #e5e7eb; display: flex; align-items: center; justify-content: center; }
        .placeholder-avatar i { font-size: 1.2rem; color: #6b7280; }
        footer { text-align: center; padding: 2rem; color: #999; font-size: 0.9rem; }
        .form-group { margin-bottom: 1rem; }
        .form-group label { display: block; margin-bottom: 0.5rem; font-weight: 500; }
        .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 0.6rem; border: 1px solid #d1d5db; border-radius: 4px; font-size: 0.95rem; }
        .form-group input:focus, .form-group select:focus { outline: none; border-color: #2563eb; box-shadow: 0 0 0 2px rgba(37,99,235,0.1); }
        .form-group .help-text { font-size: 0.8rem; color: #6b7280; margin-top: 0.25rem; }
        .action-buttons { display: flex; gap: 0.5rem; }
        .action-buttons .btn { padding: 0.4rem 0.8rem; font-size: 0.85rem; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">📊 POS System</div>
        <a href="/">🏠 Home</a>
        <a href="/about">ℹ️ About</a>
        <a href="/customers">👥 Customers</a>
        <a href="/users">👤 Users</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
