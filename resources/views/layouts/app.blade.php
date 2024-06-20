<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CropShield | Surveiller aujourd'hui, protéger demain</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" id="theme-style" href="{{ asset('css/app-white.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">

    <!-- Leaflet -->
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@1.0.0/build/chartjs-adapter-date-fns.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.geometryutil/0.9.3/leaflet.geometryutil.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js" integrity="..."></script>
    <script src="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@turf/turf@6.5.0/turf.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" integrity="...">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    @include('layouts.header')

    <main>
        <header id="fil-aryan">
            <aside>
                <a href="javascript:void(0);" onclick="goBack()">
                    <img src="{{ asset('images/icons/precedent.png') }}" data-hover-src="{{ asset('images/icons/precedent-full.png') }}" alt="Retour arrière" class="animated-hover">
                </a>
                <p>CS | @yield('pageTitle')</p>
            </aside>
            <a class="dropdown-item" href="#" onclick="">

            </a>
            <form id="logout-form" action="" method="POST" style="display:none;">
                @csrf
            </form>
            <button id="theme-toggle">
                <img id="theme-icon" src="{{ asset('images/icons/white-theme.png') }}" alt="Changer le thème">
            </button>
        </header>
        <section>
            @yield('content')
        </section>
    </main>

    @include('layouts.footer')
    <script src="{{ asset('js/theme-toggle.js') }}"></script>
    <script src="{{ asset('js/nav-toggle.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        function goBack() {
            window.history.back();
        }
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('img.animated-hover');
            images.forEach(img => {
                const originalSrc = img.src;
                const hoverSrc = img.getAttribute('data-hover-src');
                img.addEventListener('mouseenter', function() {
                    img.src = hoverSrc;
                });
                img.addEventListener('mouseleave', function() {
                    img.src = originalSrc;
                });
            });
        });
    </script>
</body>
</html>
