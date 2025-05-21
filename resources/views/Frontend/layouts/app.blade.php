<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    <!-- Bootstrap CSS cez CDN -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-6L+Fhzw1W0lGjcHxLR6XljYDe1Z1v7+ad1hn4DZFJvK7j1yS1hW0nJtou0Q8cJ3D"
        crossorigin="anonymous"
    >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icons (voliteľné) -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
        rel="stylesheet"
    >

    <!-- Google Fonts – Switzer -->
    <link href="https://fonts.googleapis.com/css2?family=Switzer:wght@400;700&display=swap" rel="stylesheet">
    <!-- Google Fonts: Lobster -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- vlastné CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100">
<x-navbar />

<main class="flex-fill">
    @yield('content')
</main>

@include('components.footer')

<!-- Bootstrap JS bundle (Popper+JS) -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFY72iv8+4Jg7gWv6F1Juj+QbOzklHhbXQqe2NTi/Qo2lAk2Q8RaIY1KjN"
    crossorigin="anonymous"
></script>

<script>
    AOS.init();
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    });
</script>

@stack('scripts')
</body>
</html>
