<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caraousel | PPID Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/logo_tasik.svg') }}">


    <link href="{{ asset('soft/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('soft/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('soft/assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
</head>


<body class="g-sidenav-show" style="background-color: #f8f9fa;">
    @include('frontend.dashboard.caraousel.content')
    @include('components.dashboard_sidenav')
    @include('components.dashboard_header')
    @yield('sidenav_dashboard')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y"
        style="min-height: 80vh">
        @yield('header_dashboard')


        @yield('content')
    </main>



    <script src="{{ asset('soft/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('soft/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('soft/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('soft/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('soft/assets/js/plugins/chartjs.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('soft/assets/js/soft-ui-dashboard.min.js?v=1.0.7') }}"></script>




</body>

</html>
