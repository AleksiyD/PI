<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    @livewireStyles
</head>
<body>
    <div id="app" style="overflow-x: auto;">
        @include('layouts.manage-navbar')

        <main class="container py-4">
            {{ $slot }}
        </main>
    </div>
    <script src="{{ asset('js/jq.min.js') }}"></script>
    <script src="{{ asset('js/livewire/alpine.min.js') }}" defer></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    @livewireScripts
    @stack('child-script')
    @stack('child-script-livewire')
</body>
</html>
