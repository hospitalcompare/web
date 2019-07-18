<!Doctype html> 
<html lang='en'>
    <head>
        <title>Hospital Compare - @yield('title')</title>
        <meta charset='utf-8'>
        <meta name='description' content='@yield('description')'>
        <meta name='keywords' content='@yield('keywords')'>
        <meta name="viewport" content="@yield('mobile')">
        @stack('styles')
        @stack('jquery')
        @stack('font-awesome')
    </head>
    <body>

        
        <div class="mainHeaderWrap">
            @include('layout.header', ['page_header' => ''])
        </div>

        <div class="mainContentWrap">
            @yield('content')
        </div>
        
        <div class="mainFooterWrap">
            {{--@yield('footer')--}}
            @include('layout.footer', ['page_footer' => ''])
        </div>
        <!-- or push target to footer -->
        @stack('main')
        @stack('button')
    </body>
</html>
