<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'X-Connect') }}</title>

    <link rel="icon" href="/images/logo/x-connect-logo-icon.png">
    <!-- Styles -->
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Main Css -->
    <link href="/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="/css/colors/default.css" rel="stylesheet" id="color-opt">

</head>
<body>

<!-- COMING SOON PAGE -->
<section class="bg-home d-flex align-items-center" data-jarallax='{"speed": 0.5}' style="background-image: url('/images/comingsoon.jpg');">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 text-center">
                <a href="javascript:void(0)" class="logo h5"><img src="/images/logo/x-connect-logo-white.png" height="100" alt=""></a>
                <div class="text-uppercase title-dark text-white mt-5 mb-4 coming-soon">We're Coming soon...</div>
{{--                <p class="text-light para-desc para-dark mx-auto">Start working with <span class="text-primary fw-bold">Box Agency</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>--}}
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <div id="countdown">
                    <ul class="count-down list-unstyled">
                        <li id="days" class="count-number list-inline-item m-2"></li>
                        <li id="hours" class="count-number list-inline-item m-2"></li>
                        <li id="mins" class="count-number list-inline-item m-2"></li>
                        <li id="secs" class="count-number list-inline-item m-2"></li>
                        <li id="end" class="h1"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section><!--section end-->
<!-- COMING SOON PAGE -->

<!-- javascript -->
<script src="/js/bootstrap.bundle.min.js"></script>
<!-- Comingsoon -->
<script src="/js/countdown.init.js"></script>
<!-- Icons -->
<script src="/js/feather.min.js"></script>
<!-- Main Js -->
<script src="/js/app.js"></script>

@yield('extra-js')
</body>
</html>
