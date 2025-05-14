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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                background-color: #121212;
                color: #e0e0e0;
            }

            .table {
                background-color: #1e1e1e;
                color: #e0e0e0;
            }

            .table thead {
                background-color: #333;
                color: #fff;
            }

            .btn-primary {
                background-color: #1976d2;
                border-color: #1976d2;
            }

            .btn-warning {
                background-color: #fbc02d;
                border-color: #fbc02d;
                color: #000;
            }

            .btn-danger {
                background-color: #d32f2f;
                border-color: #d32f2f;
            }

            .btn-info {
                background-color: #0288d1;
                border-color: #0288d1;
            }

            .sidebar {
                background-color: #1e1e1e;
                padding: 1rem;
                height: 100vh;
                position: fixed;
                width: 200px;
            }

            .sidebar a {
                color: #e0e0e0;
                display: block;
                margin: 10px 0;
                text-decoration: none;
            }

            .sidebar a:hover {
                color: #90caf9;
            }

            .content {
                margin-left: 220px;
                padding: 2rem;
            }
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    </head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <body class="font-sans antialiased">
        <div class="d-flex">
            {{-- Sidebar --}}
            @include('components.sidebar')

            {{-- Contenu principal --}}
            <div class="flex-grow-1 p-4">
                {{ $slot }}
            </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
