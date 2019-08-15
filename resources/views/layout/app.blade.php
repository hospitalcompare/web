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
    </head>

    <body class="@yield('body-class')">
        <div class="mainHeaderWrap">
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
        {{--  Modal for 'make an enquiry'  --}}
        @include('components.modalenquirenhs')
        {{--  Modal for special offers  --}}
        @include('components.modalspecial')
        {{--  Modal for special offers  --}}
        @include('components.modalenquireprivate')
    </body>

</html>
