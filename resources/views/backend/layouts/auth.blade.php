<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') | Área privada</title>
        <link rel="icon" href="{{ asset('images/logo-white.png') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="d-flex justify-content-center align-items-center vh-100" style="background-image: url({{ asset('images/studio.jpg') }}); background-size: cover">
            <div class="p-5 bg-light rounded w-50 text-center">
                @yield('content')
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
