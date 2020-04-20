<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/css/swiper.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('canvas/css/magnific-popup.css') }}" type="text/css" />
	<!-- Custom CSS -->
    <link href="{{ asset('material/css/style.css') }}" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('canvas/css/responsive.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('singgah/logos/logo-1.png') }}" type="image/x-icon">
    @yield('styles')

	<!-- Document Title
	============================================= -->
	<title>Singgah | Agency</title>

</head>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        @include('segments.header')
        
        @yield('breadcumb')
        
        <!-- Content
		============================================= -->
		<section id="content">
            @yield('content')
        </section>
        <!-- #content end -->

        @include('segments.footer')
    </div>

    <!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('canvas/js/jquery.js') }}"></script>
	<script src="{{ asset('canvas/js/plugins.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
    <script src="{{ asset('canvas/js/functions.js') }}"></script>
    @yield('scripts')
</body>
</html>