<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<!-- head-->
<head>
    <title>
        @yield('title')
    </title>
    @include('frontend.partials.head')
        @yield('style')
</head>

<!--/head-->
<body>
@include('frontend.partials.javarscript')
@include('frontend.partials.header')

@yield('content')

@include('frontend.partials.footer')
<!-- //cart-js -->
</body>
</html>
