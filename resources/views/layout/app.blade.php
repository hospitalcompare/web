<!Doctype html> 
<html lang='en'>
    <head>
        <title>App Name - @yield('title')</title>
        <meta charset='utf-8'>
        <meta name='description' content='@yield('description')'>
        <meta name='keywords' content='@yield('keywords')'>

        @stack('styles')
        @stack('jquery')
        @stack('font-awesome')
    </head>
    <body>
{{--        @section('header')--}}
{{--            <!--This is the master header section.-->--}}
{{--        @show--}}
        
        <div class="mainHeaderWrap">
            @include('layout.header', ['page_header' => ''])

        </div>

        <div class="bannerParent">
            @stack('banner')
        </div>




        <div class="mainContentWrap">
        {{--@yield('content')--}}
            @include('layout.content', ['page_content' => ''])
        </div>
        
        <div class="mainFooterWrap">
            {{--@yield('footer')--}}
            @include('layout.footer', ['page_footer' => ''])
        </div>
        <!-- or push target to footer -->
        @stack('main')
    </body>
</html>
