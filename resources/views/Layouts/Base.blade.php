<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Fruit Store')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #fdfdfd;
            font-family: 'Segoe UI', sans-serif;
        }
        footer {
            background-color: #f1f1f1;
        }
        .navbar-brand {
            font-weight: bold;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main Content --}}
    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    <!-- Google Fonts: Pacifico -->
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
