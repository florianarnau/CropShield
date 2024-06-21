<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CropShield | Surveiller aujourd'hui, protéger demain</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main>
        <section id="login-section">
            @yield('content')
        </section>
    </main>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
