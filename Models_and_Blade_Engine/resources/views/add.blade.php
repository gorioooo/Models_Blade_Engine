<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Other head elements -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
