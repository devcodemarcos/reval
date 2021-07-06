<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <!-- <script src="/app.js"></script> -->

    @stack('head-css')
    @stack('head-scripts')
</head>

<body>
    <div class="body-inner">
        <header id="header" class="header-one">
            @include('web.layout.header')
        </header>

        <footer id="footer" class="footer bg-overlay">
            @include('web.layout.footer')
        </footer>
    </div>
</body>

</html>