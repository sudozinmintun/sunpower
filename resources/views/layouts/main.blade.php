<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="KidsPro - Kids Education & Kindergarten School HTML5 Template" />
    <meta name="keywords" content="kindergarten,children,kidsschool,school,baby,childschool,academy,course,education," />
    <meta name="author" content="ThemeMascot" />
    <title>Sun Power Dragon @yield('title')</title>
    <link href="{{ asset('assets/images/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('assets/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('assets/images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/javascript-plugins-bundle.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/js/menuzord/css/menuzord.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <link id="menuzord-menu-skins" href="{{ asset('assets/css/menuzord-skins/menuzord-rounded-boxed.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/javascript-plugins-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/menuzord/js/menuzord.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/revolution-slider/css/rs6.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/revolution-slider/extra-rev-slider1.css') }}">
    <script src="{{ asset('assets/js/revolution-slider/js/revolution.tools.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution-slider/js/rs6.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution-slider/extra-rev-slider1.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/revolution-slider/extra-rev-slider-shop.css') }}">
    <script src="{{ asset('assets/js/revolution-slider/extra-rev-slider-shop-boxed.js') }}"></script>
    <link href="{{ asset('assets/js/timeline-horizontal-vertical/css/timeline-horizontal-vertical.css') }}"
        rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/js/timeline-horizontal-vertical/js/timeline-horizontal-vertical.min.js') }}"></script>
    <script src="{{ asset('assets/js/timeline-horizontal-vertical/js/custom.js') }}"></script>
</head>

<body class="tm-container-1230px has-side-panel side-panel-right">
    <div class="side-panel-body-overlay"></div>
    <div id="wrapper" class="clearfix">
        @include('layouts.shared.menu')

        @if (URL::current() == route('home'))
            @include('layouts.shared.slider')
        @endif

        <div class="main-content-area">
            @yield('content')
        </div>

        @include('layouts.shared.footer')
    </div>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    @yield('script')
</body>

</html>
