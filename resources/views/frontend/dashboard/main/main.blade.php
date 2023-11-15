<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | PPID Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/logo_tasik.svg') }}">


    <link href="{{ asset('soft/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('soft/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('soft/assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
</head>

<body style="background-color: #f8f9fa">
    @include('frontend.dashboard.main.content')


    <main class="container-fluid" style="min-height: 80vh">
        @yield('content')
    </main>



    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

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
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('soft/assets/js/soft-ui-dashboard.min.js?v=1.0.7') }}"></script>




</body>

</html>
