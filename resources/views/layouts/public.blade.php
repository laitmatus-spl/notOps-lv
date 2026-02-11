<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'NotOps — Technical & Operational Audit Consulting')</title>
    <meta name="description" content="@yield('meta_description', 'NotOps helps enterprises identify automation opportunities, AI implementation areas, and operational inefficiencies. Premium technical audit consulting.')">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800,900|space-grotesk:400,500,600,700,800" rel="stylesheet" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-notops-dark text-white antialiased">

    <!-- Navbar -->
    <x-navbar />

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />

    @stack('scripts')
</body>
</html>
