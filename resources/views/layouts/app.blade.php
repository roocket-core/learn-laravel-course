<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roocket - @yield('title')</title>

    @vite(['resources/css/app.css' , 'resources/css/course.css'])
</head>
<body>
    @include('layouts.header')
    <div class="content">

        @section('sidebar')
            <h3>Sidebar </h3>

            <div>Course List items</div>
        @show

        @yield('content')
    </div>
    @include('layouts.footer')

    @vite('resources/js/app.js')
</body>
</html>
