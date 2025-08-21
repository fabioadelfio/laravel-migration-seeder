<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Trains</title>
</head>

<body>
    <header>
        <h1 class="text-center">Tabellone dei Treni</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="container">
        <p class="text-end">&copy; 2025 Treni Italia</p>
    </footer>
</body>

</html>