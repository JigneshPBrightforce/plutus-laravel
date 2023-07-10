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

    <!-- <title> {{ config('app.name', 'Plutus Technologies') }} </title> -->
    <link rel="icon" type="image/x-icon" href="{{asset('image/Plutus-logo(fevicon).ico')}}" />
    <title>{{$title}}</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!-- Styles -->
    @include('inc.styles')
    @stack('extra-css')

    <!-- Fix Js -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</head>

<body lass="">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    @include('inc.header')

    @yield('content')

    @include('inc.footer')

    @include('inc.scripts')

    {{-- extra js for page --}}
    @stack('extra-js-scripts')
</body>

</html>