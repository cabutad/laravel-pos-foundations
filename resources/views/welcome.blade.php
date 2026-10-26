<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Management System</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; background: #f4f6f9; color: #333; }
        nav { background: #2563eb; padding: 1rem 2rem; display: flex; gap: 1.5rem; align-items: center; }
        nav a { color: #fff; text-decoration: none; font-weight: 500; }
        nav a:hover { text-decoration: underline; }
        .container { max-width: 800px; margin: 2rem auto; padding: 0 1rem; }
        h1 { margin-bottom: 0.5rem; color: #1e3a5f; }
        .subtitle { color: #666; margin-bottom: 1.5rem; }
        .content { background: #fff; border-radius: 8px; padding: 1.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.08); }
        .content p { margin-bottom: 0.75rem; line-height: 1.6; }
        .content strong { color: #1e3a5f; }
        footer { text-align: center; padding: 2rem; color: #999; font-size: 0.9rem; }
    </style>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/customers">Customers</a>
        <a href="/users">Users</a>
    </nav>

    <div class="container">
        <h1>Welcome to POS Management System</h1>
        <p class="subtitle">A simple Point-of-Sale application built with Laravel.</p>
        <div class="content">
            <p><strong>Get started</strong> by navigating through the pages above.</p>
            <p>Use the <strong>Customers</strong> and <strong>Users</strong> pages to view account listings powered by static data arrays.</p>
        </div>
    </div>

    <footer>POS Management System &copy; 2026</footer>
</body>
</html>