<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengumuman | PPID Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/logo_tasik.svg') }}">


</head>

<body>
    @include('components.header')
    @include('components.footer')
    @include('frontend.landing.main.pengumuman.content')
    @include('components.modal.modal_login')
    @yield('modallogin')

    @yield('header')
    <main class="container-fluid" style="min-height: 60vh">
        @yield('content')
    </main>
    @yield('footer')



    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const titleElement = document.getElementById("page-title")

            const titleTextLength = titleElement.textContent.length;

            const hrWidth = titleTextLength * 10;
            const hrElement = document.getElementById("titleHr");
            hrElement.style.width = hrWidth + "px";
        });
    </script>





</body>

</html>
