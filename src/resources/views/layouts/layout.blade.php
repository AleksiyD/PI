<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} @yield('title')</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords"
        content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" href="fonts/montserrat/style.css">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/app.css">

    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="img/favicon/android-chrome-512x512.png" sizes="512x512">

    @stack('style')
</head>

<body>
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    @stack('script')
</body>

</html>
