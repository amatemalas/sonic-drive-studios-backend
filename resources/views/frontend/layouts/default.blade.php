<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <link
            rel="stylesheet"
            href="https://unpkg.com/aos@2.3.1/dist/aos.css"
        />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset('images/logo-white.png') }}">

        <title>@yield('title')</title>
    </head>
    <body>
        @yield('content')

        
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        @stack('scripts')

        <script>
            AOS.init();
        </script>
    </body>
</html>
