<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <title>Reval - @yield('title', 'Layout')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">

    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">

    {{--
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('plugins/colorbox/colorbox.css') }}">
    --}}

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.min.css') }}">

    @stack('style')

</head>

<body>
    <div class="body-inner">
        <header id="header" class="header-one">
            @include('web.layout.header')
        </header>

        @yield('content')

        <footer id="footer" class="footer bg-overlay">
            @include('web.layout.footer')
        </footer>
    </div>

    <!-- initialize jQuery Library -->
    <script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}" defer></script>

    <!-- Slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    {{--
    <!-- Color box -->
    <script src="{{ asset('plugins/colorbox/jquery.colorbox.js') }}"></script>
    <!-- shuffle -->
    <script src="{{ asset('plugins/shuffle/shuffle.min.js') }}" defer></script>
    --}}

    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_KEY', false) }}" defer></script>
    @stack('scripts')
</body>

</html>