<!doctype html>
<html lang="en-US">
    <head>


        {{-- meta --}}
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="HandheldFriendly" content="true">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
        <meta name="description" content="Aleens">
        <meta name="keywords" content="Aleens">
        <meta name="author" content="TRUTH. SOLUTIONS">







        {{-- icons --}}
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('favicon-16x16.png')}}">
        <link rel="manifest" href="{{url('site.webmanifest')}}">
        <link rel="mask-icon" href="{{url('safari-pinned-tab.svg')}}" color="#00a155">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="theme-color" content="#ffffff">









        {{-- fonts --}}
        <link rel="dns-prefetch" href="//fonts.googleapis.com" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i%2C900%2C900i%7CPlayfair+Display%3A100%2C100i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i%2C900%2C900i%7CMr+De+Haviland&#038;display=swap"
            type="text/css" />






        {{-- styles --}}
        <link rel="stylesheet" href="{{url('assets/subscription/css/vendors/bootstrap.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{url('assets/subscription/fonts/font-awesome/css/font-awesome.css')}}"
            type="text/css" />
        <link rel="stylesheet" href="{{url('assets/subscription/css/vendors/magnific-popup.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{url('assets/subscription/css/vendors/splitting.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{url('assets/subscription/css/vendors/swiper.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{url('assets/subscription/css/vendors/animate.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{url('assets/subscription/css/main.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{url('assets/subscription/css/main.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{url('assets/subscription/css/mode.css')}}" type="text/css" />




        {{-- customization --}}
        <link rel="stylesheet"
            href="{{ url('assets/subscription/css/client-customization/'. strtolower(env('APP_CLIENT')) . '.css') }}">





        @yield('styles')







        {{-- --------------------------------------- --}}
        {{-- --------------------------------------- --}}





        {{-- extraHeaders --}}
        @yield('head')






    </head>
    {{-- endHeader --}}








    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}







    {{-- body --}}
    <body class="home page">





        {{-- content --}}
        {{ $slot }}





        {{-- ------------------------------------------------------ --}}
        {{-- ------------------------------------------------------ --}}






        {{-- 5: scripts --}}
        <script src="{{url('assets/subscription/js/jquery.min.js')}}"></script>
        <script src="{{url('assets/subscription/js/bootstrap.js')}}"></script>
        <script src="{{url('assets/subscription/js/swiper.js')}}"></script>
        <script src="{{url('assets/subscription/js/splitting.min.js')}}"></script>
        <script src="{{url('assets/subscription/js/TweenMax.min.js')}}"></script>
        <script src="{{url('assets/subscription/js/pixi.min.js')}}"></script>
        <script src="{{url('assets/subscription/js/jarallax.min.js')}}"></script>
        <script src="{{url('assets/subscription/js/magnific-popup.js')}}"></script>
        <script src="{{url('assets/subscription/js/imagesloaded.pkgd.js')}}"></script>
        <script src="{{url('assets/subscription/js/isotope.pkgd.js')}}"></script>
        <script src="{{url('assets/subscription/js/jquery.scrolla.js')}}"></script>
        <script src="{{url('assets/subscription/js/skrollr.js')}}"></script>
        <script src="{{url('assets/subscription/js/main-slider.js')}}"></script>
        <script src="{{url('assets/subscription/js/full-slider.js')}}"></script>
        <script src="{{url('assets/subscription/js/half-slider.js')}}"></script>
        <script src="{{url('assets/subscription/js/ex-slider.js')}}"></script>
        <script src="{{url('assets/subscription/js/hero-started.js')}}"></script>
        <script src="{{url('assets/subscription/js/common.js')}}"></script>







        {{-- 5.2: alert --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />







        {{-- 1.4: includeScripts --}}
        @yield('scripts')





    </body>
</html>
{{-- endHTML --}}