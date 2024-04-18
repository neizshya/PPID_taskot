<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Permohonan Keberatan Online | PPID Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/logo_tasik.svg') }}">
    <script src="{{ asset('pdf-js/build/pdf.mjs') }}" type="module"></script>

    <link rel="stylesheet" href=" {{ asset('pdf-js/web/viewer.css') }}">

    <script src="{{ asset('pdf-js/web/viewer.mjs') }}" type="module"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=RcP4SgRW"></script>
</head>

<body>

    @include('components.footer')
    @include('components.header')
    @include('frontend.landing.permohonan_online.permohonan_keberatan_online.content')
    @include('components.modal.modal_login')
    @yield('modallogin')
    @yield('header')

    <main class="container-fluid" style="min-height: 80vh">
        @yield('content')
    </main>
    @yield('footer')



    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the title element
            const titleElement = document.getElementById("page-title")

            // Get the text length of the title
            const titleTextLength = titleElement.textContent.length;

            // Calculate the width based on the title length (adjust the multiplier as needed)
            const hrWidth = titleTextLength * 10; // You can adjust the multiplier as needed

            // Set the calculated width for the <hr> element
            const hrElement = document.getElementById("titleHr");
            hrElement.style.width = hrWidth + "px";
        });
    </script>





</body>

</html>
