<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="{{ asset('images/logo-white.png') }}">
        <link
            rel="stylesheet"
            href="https://unpkg.com/aos@2.3.1/dist/aos.css"
        />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>@yield('title')</title>
    </head>
    <body class="bg-dark text-light">
        @include('frontend.partials.header')

        @yield('content')

        @include('frontend.partials.footer')
        
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        @stack('scripts')

        <script>
            AOS.init({
                duration: 900,
                disable: 'mobile',
            });
        </script>
    </body>
</html>
