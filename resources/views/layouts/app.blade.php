<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" href="https://bashooka.com/wp-content/uploads/2012/09/favicon.ico"/>

        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,900' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- build:css assets/css/style.min.css title="main" -->
        <!-- bower:css -->
        <!-- endbower -->
        <link rel="stylesheet" href="{{ asset('fab/css/colors/style.blue-red.min.css') }}" title="main">
        @yield('extracss')
        <!-- endbuild -->

        <script type="text/javascript">
            // For demo purposes only. Remove this script if you don't need the customizer
            if (sessionStorage.skin) {
                var defaultSkin = document.querySelector('link[title="main"]');
                defaultSkin.setAttribute('href', sessionStorage.skin);
            }
        </script>

    </head>
    <body>
        <!--[if lt IE 10]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">

            @include('partials.headers.transp-waterfall')

            {{-- @include('partials.drawer') --}}

            <main class="mdl-layout__content">
                @yield('content')

                @include('partials.footer')

            </main>

        </div>
 
        @include('partials.cart-button')

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>


        <script src="{{ asset('fab/js/theme.js') }}"></script>

        @yield('extrajs')
    </body>
</html>
