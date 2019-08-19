<!Doctype html>
<html lang='en'>
    <head>
        <title>Hospital Compare - @yield('title')</title>
        <meta charset='utf-8'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name='description' content='@yield('description')'>
        <meta name='keywords' content='@yield('keywords')'>
        <meta name="viewport" content="@yield('mobile')">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('images/icons/site.webmanifest') }}">
    </head>

    <body class="@yield('body-class')">
        <div class="header-wrapper">
            @include('layout.header', ['page_header' => ''])
        </div>

        <div class="mainContentWrap" id="app">
            @yield('content')
        </div>

        @include('layout.footer', ['page_footer' => ''])
{{--        <div class="main-footer-wrap">--}}
{{--        </div>--}}
        <!-- or push target to footer -->
        <script src="{{ asset('js/app.js') }}"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_KEY') }}"
                async defer></script>
    </body>

</html>
