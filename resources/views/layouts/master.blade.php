<!DOCTYPE html>
<html lang="de">
    <head>
        <title>@yield('title') Die Hochzeitskiste</title>

        <meta charset="UTF-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        @if(auth()->check())
        <meta name="api_token" content="{{ auth()->user()->api_token }}" />
        @endif

        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="{{ asset('/assets/logo_32x32.png') }}"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="{{ asset('/assets/logo_16x16.png') }}"
        />
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
        
    </head>
    <body>
        @include('partials.navbar') @include('partials.alerts')
        
        @yield('container') 
        @include('partials.footer')

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
        <script src="{{ asset('js/main.js') }}"></script>
        @stack('scripts')
    </body>
</html>
