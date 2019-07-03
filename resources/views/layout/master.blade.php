<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
        @show
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- global styles-->

    <!-- end of global styles-->

@yield('header_styles')

<!-- Scripts -->

<!-- Scripts -->
</head>

<body class="fixedMenu_header fixed_header">
<div id="app">
    <div class="" id="wrap">
        <div id="top" class="fixed">
            <!-- .navbar -->

            <!-- /.navbar -->
            <!-- /.head -->
        </div>
        <!-- /#top -->
        <div class="wrapper fixedNav_top">
            <div id="left" class="fixed">
                <!-- #menu -->

                <!-- /#menu -->
            </div>
            <!-- /#left -->
            <div id="content" class="bg-container">
                <!-- Content -->
            @yield('content')
            <!-- Content end -->
            </div>
        </div>
    </div>
</div>

<!-- global scripts-->

<!-- end of global scripts-->

<!-- page level js -->

@yield('footer_scripts')

<!-- end page level js -->
</body>
</html>