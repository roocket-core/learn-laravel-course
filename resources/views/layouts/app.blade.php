<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title' , 'Roocket')</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
    <!-- Header -->
    @include('layouts.header')

    <!-- Main Content -->
    <main class="flex-grow container mx-auto p-4">
        @yield('content')
    </main>

    @include('layouts.footer')

    @vite('resources/js/app.js')
</body>
</html>
