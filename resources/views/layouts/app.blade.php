<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informasi')</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/johndoe.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/css/themify-icons.css') }}">
</head>
<body>
    @include('layouts.header')
    @include('layouts.navigation')

    <main class="content">
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
