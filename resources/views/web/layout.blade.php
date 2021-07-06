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

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.min.css') }}">

    @stack('head-css')

</head>

<body>
    <div class="body-inner">
        <header id="header" class="header-one">
            @include('web.layout.header')
        </header>

        @yield('content')

        {{--
        @include('web.sections/static/banner')

        @include('web.sections/static/ourvalues')
        
        @include('web.sections/static/numbers')
        --}}

        <footer id="footer" class="footer bg-overlay">
            @include('web.layout.footer')
        </footer>
    </div>

    <!-- initialize jQuery Library -->
    <script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}" defer></script>

    <!-- <script src="/app.js"></script> -->
    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5UWpJ9XHraahfQa4JzSMLORzeLmGQ594" defer></script>
    @stack('scripts')
</body>

</html>