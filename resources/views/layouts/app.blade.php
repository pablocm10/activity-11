<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menus Project</title>
    <style>
        body { font-family: sans-serif; margin: 0; display: flex; flex-direction: column; min-height: 100vh; }
        nav { background: #333; padding: 1rem; }
        nav a { color: white; margin-right: 15px; text-decoration: none; padding: 5px 10px; }
        .active { background: #007bff; border-radius: 4px; font-weight: bold; }
        main { padding: 2rem; flex: 1; }
        footer { background: #f4f4f4; text-align: center; padding: 1rem; border-top: 1px solid #ddd; }
        /* Add to existing styles */
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px; }
        .card { border: 1px solid #eee; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
        .card.green { border-left: 5px solid #28a745; }
        .card.red { border-left: 5px solid #dc3545; }
        .progress-bar { background: #e9ecef; border-radius: 10px; height: 20px; width: 100%; overflow: hidden; }
        .progress-fill { background: #007bff; height: 100%; text-align: center; color: white; font-size: 12px; }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('income') }}" class="{{ request()->routeIs('income') ? 'active' : '' }}">Income</a>
        <a href="{{ route('expenses') }}" class="{{ request()->routeIs('expenses') ? 'active' : '' }}">Expenses</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Activity performed by: <strong>Pablo Castaños</strong></p>
        <p>{{ date('Y') }} - Software Development Engineering</p>
    </footer>

</body>
</html>