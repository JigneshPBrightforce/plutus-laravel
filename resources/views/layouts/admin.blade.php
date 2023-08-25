@include('admin.inc.function')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="userId" content="{{ Auth::check() ? Auth::user()->id : '' }}">

    <title>Admin Panel | Plutustec</title>
    <link rel="icon" type="image/x-icon" href="{{asset('image/Plutus-logo(fevicon).ico')}}" />
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}?t=<?php echo time();?>" /> -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    @include('admin.inc.styles')
    @stack('extra-css')

    <!-- Fix Js -->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
</head>

<body>
    @include('admin.inc.header')
    <!-- BEGIN LOADER -->

    <!--  END LOADER -->
    <div id="app">
        @include('admin.inc.navbar')
    </div>
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        @include('admin.inc.sidebar')

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            @if(session('alert'))
            <div class="alert alert-danger alert-dismissible show " role="alert">
                <strong>{{ trans(session('alert'))}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if(session('message'))
            <div class="alert alert-success alert-dismissible show " role="alert">
                <strong>{{ trans(session('message'))}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @yield('content')
        </div>
        <!--  END CONTENT PART  -->
    </div>
    <!-- END MAIN CONTAINER -->
    @include('admin.inc.footer')

    @include('admin.inc.scripts')

    {{-- extra js for page --}}
    @stack('extra-js-scripts')
    <script>
    $(function() {
        setTimeout(function() {
            $(".alert-success").hide()
        }, 3000);
    });
    </script>
</body>

</html>