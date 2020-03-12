<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{ asset('mk/images/favicon/5.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mk/images/favicon/5.png') }}" type="image/x-icon">
    <title>@yield('titel')</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('mk/css/fontawesome.css') }}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('mk/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mk/css/slick-theme.css') }}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('mk/css/animate.css') }}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('mk/css/themify-icons.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('mk/css/bootstrap.css') }}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('mk/css/color5.css') }}" media="screen" id="color">

</head>

<body>

@include('partials.header')

@yield('breadcumb')

@yield('content')

@include('partials.footer')


<!-- tap to top start -->
<div class="tap-top">
    <div><i class="fa fa-angle-double-up"></i></div>
</div>
<!-- tap to top end -->


<!-- latest jquery-->
<script src="{{ asset('mk/js/jquery-3.3.1.min.js') }}"></script>

<!-- popper js-->
<script src="{{ asset('mk/js/popper.min.js') }}"></script>

<!-- slick js-->
<script src="{{ asset('mk/js/slick.js') }}"></script>

<!-- menu js-->
<script src="{{ asset('mk/js/menu.js') }}"></script>

<!-- lazyload js-->
<script src="{{ asset('mk/js/lazysizes.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('mk/js/bootstrap.js') }}"></script>

<!-- Bootstrap Notification js-->
<script src="{{ asset('mk/js/bootstrap-notify.min.js') }}"></script>

<!-- Theme js-->
<script src="{{ asset('mk/js/script.js') }}"></script>
</body>

</html>