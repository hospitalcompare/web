<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/icons/site.webmanifest') }}">
    <script type="text/javascript">
        //uncomment and change this to false if you're having trouble with WOFFs
        //var woffEnabled = true;
        //to place your webfonts in a custom directory
        //uncomment this and set it to where your webfonts are.
        //var customPath = "/themes/fonts";
    </script>
    <script type="text/javascript" src="{{ asset('fonts/MyFontsWebfontsKit.js') }}"></script>

    <title>Hospital Compare | Under Construction</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*html, body {*/
        /*    background-color: ;*/
        /*    color: #636b6f;*/
        /*    font-family: 'Nunito', sans-serif;*/
        /*    font-weight: 200;*/
        /*    height: 100vh;*/
        /*    margin: 0;*/
        /*}*/

        /*.full-height {*/
        /*    height: 100vh;*/
        /*}*/

        /*.flex-center {*/
        /*    align-items: center;*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*}*/

        /*.position-ref {*/
        /*    position: relative;*/
        /*}*/

        /*.top-right {*/
        /*    position: absolute;*/
        /*    right: 10px;*/
        /*    top: 18px;*/
        /*}*/

        /*.content {*/
        /*    text-align: center;*/
        /*}*/

        /*.title {*/
        /*    font-size: 84px;*/
        /*}*/

        /*.links > a {*/
        /*    color: #636b6f;*/
        /*    padding: 0 25px;*/
        /*    font-size: 13px;*/
        /*    font-weight: 600;*/
        /*    letter-spacing: .1rem;*/
        /*    text-decoration: none;*/
        /*    text-transform: uppercase;*/
        /*}*/

        /*.m-b-md {*/
        /*    margin-bottom: 30px;*/
        /*}*/
    </style>
</head>
<body class="bg-turq" style="height: 100vh">
<div class="d-flex justify-content-center align-items-center w-100 h-100">
{{--    @if (Route::has('login'))--}}
{{--        <div class="top-right links">--}}
{{--            @auth--}}
{{--                <a href="{{ url('/home') }}">Home</a>--}}
{{--            @else--}}
{{--                <a href="{{ route('login') }}">Login</a>--}}

{{--                @if (Route::has('register'))--}}
{{--                    <a href="{{ route('register') }}">Register</a>--}}
{{--                @endif--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    @endif--}}
    <div class="p-5 w-100 text-center">
        <img class="w-100 mb-3" src="{{ asset('/images/logo-desktop.svg') }}" style="max-width: 500px">
        <h1 class="text-white">Launching soon</h1>
    </div>
</div>
</body>
</html>
