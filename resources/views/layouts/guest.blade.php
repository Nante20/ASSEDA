<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts et Styles via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light text-dark">
    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center py-5">
        <!-- Logo -->
        <div class="mb-4">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Application Logo" class="img-fluid" style="width: 80px; height: 80px;">
            </a>
        </div>

        <!-- Conteneur du contenu -->
        <div class="w-100 shadow-lg bg-white rounded p-4" style="max-width: 400px;">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
