<!doctype html>
<html lang="de">
<head>

    <title>@yield('title') Die Hochzeitskiste</title>

    <meta charset="UTF-8">

    @if(auth()->check())
        <meta name="api_token" content="{{ auth()->user()->api_token }}">
    @endif

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <script src="{{ asset('js/main.js') }}"></script>


    
</head>
<body>

    @include('partials.navbar')

        @include('partials.alerts')

        @yield('container')

    @include('partials.footer')

</body>
</html>
