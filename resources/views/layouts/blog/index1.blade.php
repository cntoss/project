<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>smart bag</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('web/images/icons/icon_logo.png')}}">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/css-plugins-call.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('web/css/colors.css')}}">
    </head>
    <body>
        <div class="wrapper home-one">
            <!-- HEADER AREA START -->
            @include('layouts.blog.snippets.headertop')
            <!-- HRADER AREA END -->
            <!-- Best sellers -->
            @yield('content1')
            <!-- Best sellers end -->
            <!-- footer start -->
            @include('layouts.blog.snippets.footer')
            <!-- footer end -->
           </div>
        <!-- Body main wrapper end -->


        <!-- jQuery CDN -->
        <script src="{{asset('web/js/jquery-3.2.1.min.js')}}" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- jQuery Local -->
        <script src="{{asset('web/js/jquery-3.2.1.min.js')}}"></script>

        <!-- Popper min js -->
        <script src="{{asset('web/js/popper.min.js')}}"></script>
        <!-- Bootstrap min js  -->
        <script src="{{asset('web/js/bootstrap.min.js')}}"></script>
		<!-- nivo slider pack js  -->
        <script src="{{asset('web/js/jquery.nivo.slider.pack.js')}}"></script>
        <!-- All plugins here -->
        <script src="{{asset('web/js/plugins.js')}}"></script>
        <!-- Main js  -->
        <script src="{{asset('web/js/main.js')}}"></script>
</html>