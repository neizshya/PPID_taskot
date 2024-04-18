<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda | PPID Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/logo_tasik.svg') }}">
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=RcP4SgRW"></script>
</head>

<body>

    @include('components.footer')
    @include('components.header')
    @include('frontend.landing.main.content')
    @include('components.modal.modal_login')
    @yield('modallogin')
    @yield('header')

    <main style="min-height: 80vh">
        @yield('content')
    </main>
    @yield('footer')
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</body>
</html>
