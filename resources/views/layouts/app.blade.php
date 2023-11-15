<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Park Planner') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href="https://fonts.cdnfonts.com/css/helvetica-neue-5" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/sass/style.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('includes.header')
        <main class="py-5">
            @yield('content')
        </main>
        @include('includes.footer')
    </div>
</body>

</html>