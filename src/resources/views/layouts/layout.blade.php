<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ООО ПИЩЕВОЙ ИНЖИНИРИНГ @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('fonts/montserrat/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles-merged.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" type="image/x-icon" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/android-chrome-192x192.png') }}" sizes="192x192">
		<link rel="icon" type="image/png" href="{{ asset('img/favicon/android-chrome-512x512.png') }}" sizes="512x512">

    @stack('style')
</head>

<body>
    @include('layouts.utils.notifications.notification', ['key' => 'success'])
    @include('layouts.utils.notifications.notification', ['key' => 'warning'])
    @include('layouts.utils.notifications.notification', ['key' => 'danger'])
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
    <script src="{{ asset('js/scripts.min.js')}}"></script>
    <script src="{{ asset('js/main.min.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    @stack('script')
</body>

</html>
