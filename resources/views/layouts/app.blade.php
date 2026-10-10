<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Автосалон')</title>
    <!-- Підключення Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('showroom.index') }}">Автосалон Преміум</a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('showroom.index') }}">Головна</a>
            <a class="nav-link" href="{{ route('showroom.contact') }}">Контакти</a>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<!-- Підключення Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
