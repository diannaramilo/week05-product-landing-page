<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BASH MANILA — Bags built for the bash')</title>
    <meta name="description" content="BASH MANILA is a Manila-made bag label — structured silhouettes, chrome hardware, and reflective stitching built for the city at night.">
    <link rel="icon" href="{{ asset('images/logo-mark-ink.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-blush text-bash-ink antialiased">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
