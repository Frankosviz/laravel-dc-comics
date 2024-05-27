<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Con il segnaposto Yield(title) andiamo a dire che questo titolo cambierà in base a ciascuna pagina, e se non troverà nessun Yield scriverà Vite Comics  -->
    <title>@yield('title', 'Laravel-DC-Comics')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    @include('partials.jumbotron')
    <main>
        @yield('content')
    </main> 
    @include('partials.about')
    @include('partials.footer')
</body>

</html>
