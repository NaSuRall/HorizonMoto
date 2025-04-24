<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    @yield('style')

</head>
<body class="bg-gray-100 text-gray-900">
<main class="max-w-7xl mx-auto p-6">
    @yield('content')
</main>

@stack('scripts')
</body>
</html>
