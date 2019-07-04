<!Doctype html>
<html lang='en'>
<head>
    <title>App Name - @yield('title')</title>
    <meta charset='utf-8'>
    <meta name='description' content='@yield('description')'>
    <meta name='keywords' content='@yield('keywords')'>

    @stack('styles')
</head>
<body>
{{--        @section('header')--}}
{{--            <!--This is the master header section.-->--}}
{{--        @show--}}

<div class="mainHeaderWrap">
    @yield('header')
</div>


<div class="mainContentWrap">
    @yield('content')
</div>

<div class="mainFooterWrap">
    @yield('footer')
</div>
<!-- or push target to footer -->
@stack('main')
</body>
</html>