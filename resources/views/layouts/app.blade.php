@include('inc.function')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <link rel="icon" type="image/x-icon" href="{{asset('image/Plutus-logo(fevicon).ico')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}?t=<?php echo time(); ?>" />

    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <title>{{$title}}</title>
    <meta name="description" content="{{$metaDescription}}">
    <meta name="keywords" content="{{$metaKeywords}}">
    <meta name="author" content="Plutus Technologies Pvt. Ltd.">
    <!-- <meta http-equiv="refresh" content="5;url='{{ env('APP_URL')}}'"> -->
    <meta name="robots" content="index, follow">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$title}}" />
    <meta property="og:description" content="{{$metaDescription}}" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="Web Application and Mobile App Development Company" />
    <meta property="og:image" content="{{ asset('image/Plutus-logo.png')}}" />
    <meta property="og:image:secure_url" content="{{ asset('image/Plutus-logo.png')}}" />
    <meta property="og:image:width" content="915" />
    <meta property="og:image:height" content="610" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="{{$metaDescription}}" />
    <meta name="twitter:title" content="{{$title}}" />
    <meta name="twitter:image" content="{{ asset('image/Plutus-logo.png')}}" />
    <meta name="generator" content="Laravel 7" />
    <meta name="keywords" content="custom software development company" />
    <meta name="msapplication-TileImage" content="{{asset('image/Plutus-logo(fevicon).ico')}}" />
    <meta name="generator" content="NitroPack" />

    <!-- Styles -->
    @include('inc.styles')
    @stack('extra-css')

    <!-- Fix Js -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</head>

<body class="">
    @include('inc.header')

    @yield('content')

    @include('inc.footer')

    {{-- extra js for page --}}
    @stack('extra-js-scripts')

    @include('inc.scripts')
</body>

</html>