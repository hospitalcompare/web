<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Hospital Compare - @yield('title')</title>
        <meta charset='utf-8'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name='description' content='@yield('description')'>
        <meta name='keywords' content='@yield('keywords')'>
        <meta name="viewport" content="@yield('mobile')">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
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
        {{-- Stickybits is the script for handling position sticky cross browser --}}
        <script type="text/javascript" src="{{ asset('js/stickybits.js') }}"></script>
        @yield('scripts')

    </head>
    <body class="@yield('body-class')">
        <div class="header-wrapper">
            @include('layout.header')
        </div>

        @include('components.basic.alert')
        <main class="" id="app">
            @yield('content')
        </main>

        @include('layout.footer', ['page_footer' => ''])

        <script src="{{ mix('js/app.js') }}"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.googleApiKey') }}"
                async defer></script>
        <script>
            window.addEventListener("load", function(){
                window.cookieconsent.initialise({
                    "palette": {
                        "popup": {
                            "background": "#efefef",
                            "text": "#1c1c1c"
                        },
                        "button": {
                            "background": "#00cecd",
                            "text": "#ffffff"
                        }
                    },
                    "theme": "hc-cookie",
                    "position": "bottom-right",
                    "content": {
                        "href": "/cookie-policy/"
                    }
                })});
        </script>
    </body>

</html>
