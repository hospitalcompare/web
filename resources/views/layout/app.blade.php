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
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"/>

        @stack('styles')
        @stack('jquery')
        @stack('font-awesome')
    </head>

    <body>
        <div class="mainHeaderWrap">
            @include('layout.header', ['page_header' => ''])
        </div>

        <div class="mainContentWrap" id="app">
            @yield('content')
        </div>
        
        <div class="mainFooterWrap">
            {{--@yield('footer')--}}
            @include('layout.footer', ['page_footer' => ''])
        </div>
        <!-- or push target to footer -->
        @stack('main')
        <script src="{{ asset('js/library/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('https://kit.fontawesome.com/d4b841dc1e.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('button')

    </body>

</html>
